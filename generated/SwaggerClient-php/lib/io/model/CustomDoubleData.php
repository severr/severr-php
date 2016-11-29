<?php
/**
 * CustomDoubleData
 *
 * PHP version 5
 *
 * @category Class
 * @package  severr
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Severr API
 *
 * Get your application events and errors to Severr via the *Severr API*.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace io.severr.model;

use \ArrayAccess;

/**
 * CustomDoubleData Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     severr
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomDoubleData implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomDoubleData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'custom_data1' => 'double',
        'custom_data2' => 'double',
        'custom_data3' => 'double',
        'custom_data4' => 'double',
        'custom_data5' => 'double',
        'custom_data6' => 'double',
        'custom_data7' => 'double',
        'custom_data8' => 'double',
        'custom_data9' => 'double',
        'custom_data10' => 'double'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'custom_data1' => 'customData1',
        'custom_data2' => 'customData2',
        'custom_data3' => 'customData3',
        'custom_data4' => 'customData4',
        'custom_data5' => 'customData5',
        'custom_data6' => 'customData6',
        'custom_data7' => 'customData7',
        'custom_data8' => 'customData8',
        'custom_data9' => 'customData9',
        'custom_data10' => 'customData10'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'custom_data1' => 'setCustomData1',
        'custom_data2' => 'setCustomData2',
        'custom_data3' => 'setCustomData3',
        'custom_data4' => 'setCustomData4',
        'custom_data5' => 'setCustomData5',
        'custom_data6' => 'setCustomData6',
        'custom_data7' => 'setCustomData7',
        'custom_data8' => 'setCustomData8',
        'custom_data9' => 'setCustomData9',
        'custom_data10' => 'setCustomData10'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'custom_data1' => 'getCustomData1',
        'custom_data2' => 'getCustomData2',
        'custom_data3' => 'getCustomData3',
        'custom_data4' => 'getCustomData4',
        'custom_data5' => 'getCustomData5',
        'custom_data6' => 'getCustomData6',
        'custom_data7' => 'getCustomData7',
        'custom_data8' => 'getCustomData8',
        'custom_data9' => 'getCustomData9',
        'custom_data10' => 'getCustomData10'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['custom_data1'] = isset($data['custom_data1']) ? $data['custom_data1'] : null;
        $this->container['custom_data2'] = isset($data['custom_data2']) ? $data['custom_data2'] : null;
        $this->container['custom_data3'] = isset($data['custom_data3']) ? $data['custom_data3'] : null;
        $this->container['custom_data4'] = isset($data['custom_data4']) ? $data['custom_data4'] : null;
        $this->container['custom_data5'] = isset($data['custom_data5']) ? $data['custom_data5'] : null;
        $this->container['custom_data6'] = isset($data['custom_data6']) ? $data['custom_data6'] : null;
        $this->container['custom_data7'] = isset($data['custom_data7']) ? $data['custom_data7'] : null;
        $this->container['custom_data8'] = isset($data['custom_data8']) ? $data['custom_data8'] : null;
        $this->container['custom_data9'] = isset($data['custom_data9']) ? $data['custom_data9'] : null;
        $this->container['custom_data10'] = isset($data['custom_data10']) ? $data['custom_data10'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets custom_data1
     * @return double
     */
    public function getCustomData1()
    {
        return $this->container['custom_data1'];
    }

    /**
     * Sets custom_data1
     * @param double $custom_data1
     * @return $this
     */
    public function setCustomData1($custom_data1)
    {
        $this->container['custom_data1'] = $custom_data1;

        return $this;
    }

    /**
     * Gets custom_data2
     * @return double
     */
    public function getCustomData2()
    {
        return $this->container['custom_data2'];
    }

    /**
     * Sets custom_data2
     * @param double $custom_data2
     * @return $this
     */
    public function setCustomData2($custom_data2)
    {
        $this->container['custom_data2'] = $custom_data2;

        return $this;
    }

    /**
     * Gets custom_data3
     * @return double
     */
    public function getCustomData3()
    {
        return $this->container['custom_data3'];
    }

    /**
     * Sets custom_data3
     * @param double $custom_data3
     * @return $this
     */
    public function setCustomData3($custom_data3)
    {
        $this->container['custom_data3'] = $custom_data3;

        return $this;
    }

    /**
     * Gets custom_data4
     * @return double
     */
    public function getCustomData4()
    {
        return $this->container['custom_data4'];
    }

    /**
     * Sets custom_data4
     * @param double $custom_data4
     * @return $this
     */
    public function setCustomData4($custom_data4)
    {
        $this->container['custom_data4'] = $custom_data4;

        return $this;
    }

    /**
     * Gets custom_data5
     * @return double
     */
    public function getCustomData5()
    {
        return $this->container['custom_data5'];
    }

    /**
     * Sets custom_data5
     * @param double $custom_data5
     * @return $this
     */
    public function setCustomData5($custom_data5)
    {
        $this->container['custom_data5'] = $custom_data5;

        return $this;
    }

    /**
     * Gets custom_data6
     * @return double
     */
    public function getCustomData6()
    {
        return $this->container['custom_data6'];
    }

    /**
     * Sets custom_data6
     * @param double $custom_data6
     * @return $this
     */
    public function setCustomData6($custom_data6)
    {
        $this->container['custom_data6'] = $custom_data6;

        return $this;
    }

    /**
     * Gets custom_data7
     * @return double
     */
    public function getCustomData7()
    {
        return $this->container['custom_data7'];
    }

    /**
     * Sets custom_data7
     * @param double $custom_data7
     * @return $this
     */
    public function setCustomData7($custom_data7)
    {
        $this->container['custom_data7'] = $custom_data7;

        return $this;
    }

    /**
     * Gets custom_data8
     * @return double
     */
    public function getCustomData8()
    {
        return $this->container['custom_data8'];
    }

    /**
     * Sets custom_data8
     * @param double $custom_data8
     * @return $this
     */
    public function setCustomData8($custom_data8)
    {
        $this->container['custom_data8'] = $custom_data8;

        return $this;
    }

    /**
     * Gets custom_data9
     * @return double
     */
    public function getCustomData9()
    {
        return $this->container['custom_data9'];
    }

    /**
     * Sets custom_data9
     * @param double $custom_data9
     * @return $this
     */
    public function setCustomData9($custom_data9)
    {
        $this->container['custom_data9'] = $custom_data9;

        return $this;
    }

    /**
     * Gets custom_data10
     * @return double
     */
    public function getCustomData10()
    {
        return $this->container['custom_data10'];
    }

    /**
     * Sets custom_data10
     * @param double $custom_data10
     * @return $this
     */
    public function setCustomData10($custom_data10)
    {
        $this->container['custom_data10'] = $custom_data10;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\severr\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\severr\ObjectSerializer::sanitizeForSerialization($this));
    }
}


