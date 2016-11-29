<?php

/**
 */
namespace severr;

use Exception;
use severr\client\model\Stacktrace;
use severr\client\model\StackTraceLine;
use severr\client\model\StackTraceLines;

class ErrorHelper
{
    /**
     * @var SeverrClient
     */
    private $severrClient;

    /*
     * Constructor that takes in the severr client to use.
     */
    public function __construct(\severr\SeverrClient $severrClient)
    {
        $this->severrClient = $severrClient;
    }

    private function buildAppEvent($classification, Exception $exc) {
        $appEvent = $this->severrClient->createAppEvent($classification, $exc->getMessage(), get_class($exc));
        $appEvent->setEventStacktrace($this->createStacktrace($exc));
        return $appEvent;
    }

    private function createStacktrace(Exception $exc) {

        $stacktrace = new Stacktrace();
        foreach($exc->getTrace() as $exc_item) {

            $stacktraceLines = new StackTraceLines();
            foreach($exc_item as $item) {
                $stacktraceLine = new StackTraceLine();
                $stacktraceLine->setFunction($item["class"] . "->" . $item["function"]);
                $stacktraceLine->setLine($item["line"]);
                $stacktraceLine->setFile($item["file"]);
                array_push($stacktraceLines, $stacktraceLine);
            }

            array_push($stacktrace, $stacktraceLines);
        }

        return $stacktrace;
    }

    public function onError($code, $message, $file, $line)
    {
        $exc = new Exception($message);

        switch ($code) {
            case E_NOTICE:
            case E_USER_NOTICE:
                $classification = "Info";
                break;
            case E_WARNING:
            case E_USER_WARNING:
                $classification = "Warning";
                break;
            case E_ERROR:
            case E_CORE_ERROR:
            case E_RECOVERABLE_ERROR:
                $classification = "Error";
                break;
            case E_USER_ERROR:
            default:
                $classification = "Fatal";
                break;
        }

        $appEvent = $this->buildAppEvent($classification, $exc);
        $this->severrClient->sendEvent($appEvent);
    }

    public function onException($exc)
    {
        $appEvent = $this->buildAppEvent("Error", $exc);
        $this->severrClient->sendEvent($appEvent);
    }

    public function onShutdown()
    {
        $error = error_get_last();
        if ($error === null) {
            return;
        }
        if ($error['type'] & error_reporting() === 0) {
            return;
        }

        $appEvent = $this->buildAppEvent("Fatal", new Exception($error['message']));
        $this->severrClient->sendEvent($appEvent);
    }

    public function register()
    {
        set_error_handler([$this, 'onError'], error_reporting());
        set_exception_handler([$this, 'onException']);
        register_shutdown_function([$this, 'onShutdown']);
    }
}
