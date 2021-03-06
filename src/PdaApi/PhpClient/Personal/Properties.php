<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/personal.proto

namespace PdaApi\PhpClient\Personal;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PdaApi.PhpClient.Personal.Properties</code>
 */
class Properties extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 userId = 1;</code>
     */
    private $userId = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value gender = 2;</code>
     */
    private $gender = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue isVerified = 3;</code>
     */
    private $isVerified = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value status = 4;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp birthdate = 5;</code>
     */
    private $birthdate = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value country = 6;</code>
     */
    private $country = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 7;</code>
     */
    private $city = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue registrationIp = 8;</code>
     */
    private $registrationIp = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue lastLoginIp = 9;</code>
     */
    private $lastLoginIp = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value nodeId = 10;</code>
     */
    private $nodeId = null;
    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Int32Value socialNetwork = 11;</code>
     */
    private $socialNetwork;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue timezone = 12;</code>
     */
    private $timezone = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 13;</code>
     */
    private $createdAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value lastVisitCountry = 14;</code>
     */
    private $lastVisitCountry = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue lastVisitCity = 15;</code>
     */
    private $lastVisitCity = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp registeredAt = 16;</code>
     */
    private $registeredAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastVisitAt = 17;</code>
     */
    private $lastVisitAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue registrationFormName = 18;</code>
     */
    private $registrationFormName = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue countryOfRegistration = 19;</code>
     */
    private $countryOfRegistration = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationEmailStatus = 20;</code>
     */
    private $confirmationEmailStatus = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationPhoneStatus = 21;</code>
     */
    private $confirmationPhoneStatus = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue phoneNumberPrefix = 22;</code>
     */
    private $phoneNumberPrefix = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue defaultLanguage = 23;</code>
     */
    private $defaultLanguage = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $userId
     *     @type \Google\Protobuf\Int32Value $gender
     *     @type \Google\Protobuf\BoolValue $isVerified
     *     @type \Google\Protobuf\Int32Value $status
     *     @type \Google\Protobuf\Timestamp $birthdate
     *     @type \Google\Protobuf\Int32Value $country
     *     @type \Google\Protobuf\StringValue $city
     *     @type \Google\Protobuf\StringValue $registrationIp
     *     @type \Google\Protobuf\StringValue $lastLoginIp
     *     @type \Google\Protobuf\Int32Value $nodeId
     *     @type \Google\Protobuf\Int32Value[]|\Google\Protobuf\Internal\RepeatedField $socialNetwork
     *     @type \Google\Protobuf\StringValue $timezone
     *     @type \Google\Protobuf\Timestamp $createdAt
     *     @type \Google\Protobuf\Int32Value $lastVisitCountry
     *     @type \Google\Protobuf\StringValue $lastVisitCity
     *     @type \Google\Protobuf\Timestamp $registeredAt
     *     @type \Google\Protobuf\Timestamp $lastVisitAt
     *     @type \Google\Protobuf\StringValue $registrationFormName
     *     @type \Google\Protobuf\StringValue $countryOfRegistration
     *     @type \Google\Protobuf\BoolValue $confirmationEmailStatus
     *     @type \Google\Protobuf\BoolValue $confirmationPhoneStatus
     *     @type \Google\Protobuf\StringValue $phoneNumberPrefix
     *     @type \Google\Protobuf\StringValue $defaultLanguage
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Protos\Personal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 userId = 1;</code>
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>int32 userId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value gender = 2;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Returns the unboxed value from <code>getGender()</code>

     * Generated from protobuf field <code>.google.protobuf.Int32Value gender = 2;</code>
     * @return int|null
     */
    public function getGenderValue()
    {
        $wrapper = $this->getGender();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value gender = 2;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Generated from protobuf field <code>.google.protobuf.Int32Value gender = 2;</code>
     * @param int|null $var
     * @return $this
     */
    public function setGenderValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int32Value(['value' => $var]);

        return $this->setGender($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue isVerified = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsVerified()
    {
        return $this->isVerified;
    }

    /**
     * Returns the unboxed value from <code>getIsVerified()</code>

     * Generated from protobuf field <code>.google.protobuf.BoolValue isVerified = 3;</code>
     * @return bool|null
     */
    public function getIsVerifiedValue()
    {
        $wrapper = $this->getIsVerified();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue isVerified = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->isVerified = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Generated from protobuf field <code>.google.protobuf.BoolValue isVerified = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIsVerifiedValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);

        return $this->setIsVerified($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value status = 4;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the unboxed value from <code>getStatus()</code>

     * Generated from protobuf field <code>.google.protobuf.Int32Value status = 4;</code>
     * @return int|null
     */
    public function getStatusValue()
    {
        $wrapper = $this->getStatus();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value status = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Generated from protobuf field <code>.google.protobuf.Int32Value status = 4;</code>
     * @param int|null $var
     * @return $this
     */
    public function setStatusValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int32Value(['value' => $var]);

        return $this->setStatus($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp birthdate = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp birthdate = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setBirthdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->birthdate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value country = 6;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the unboxed value from <code>getCountry()</code>

     * Generated from protobuf field <code>.google.protobuf.Int32Value country = 6;</code>
     * @return int|null
     */
    public function getCountryValue()
    {
        $wrapper = $this->getCountry();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value country = 6;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->country = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Generated from protobuf field <code>.google.protobuf.Int32Value country = 6;</code>
     * @param int|null $var
     * @return $this
     */
    public function setCountryValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int32Value(['value' => $var]);

        return $this->setCountry($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the unboxed value from <code>getCity()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue city = 7;</code>
     * @return string|null
     */
    public function getCityValue()
    {
        $wrapper = $this->getCity();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue city = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCityValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setCity($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue registrationIp = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getRegistrationIp()
    {
        return $this->registrationIp;
    }

    /**
     * Returns the unboxed value from <code>getRegistrationIp()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue registrationIp = 8;</code>
     * @return string|null
     */
    public function getRegistrationIpValue()
    {
        $wrapper = $this->getRegistrationIp();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue registrationIp = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setRegistrationIp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->registrationIp = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue registrationIp = 8;</code>
     * @param string|null $var
     * @return $this
     */
    public function setRegistrationIpValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setRegistrationIp($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue lastLoginIp = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * Returns the unboxed value from <code>getLastLoginIp()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue lastLoginIp = 9;</code>
     * @return string|null
     */
    public function getLastLoginIpValue()
    {
        $wrapper = $this->getLastLoginIp();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue lastLoginIp = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLastLoginIp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->lastLoginIp = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue lastLoginIp = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLastLoginIpValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setLastLoginIp($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value nodeId = 10;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Returns the unboxed value from <code>getNodeId()</code>

     * Generated from protobuf field <code>.google.protobuf.Int32Value nodeId = 10;</code>
     * @return int|null
     */
    public function getNodeIdValue()
    {
        $wrapper = $this->getNodeId();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value nodeId = 10;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->nodeId = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Generated from protobuf field <code>.google.protobuf.Int32Value nodeId = 10;</code>
     * @param int|null $var
     * @return $this
     */
    public function setNodeIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int32Value(['value' => $var]);

        return $this->setNodeId($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Int32Value socialNetwork = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSocialNetwork()
    {
        return $this->socialNetwork;
    }

    /**
     * Generated from protobuf field <code>repeated .google.protobuf.Int32Value socialNetwork = 11;</code>
     * @param \Google\Protobuf\Int32Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSocialNetwork($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Int32Value::class);
        $this->socialNetwork = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue timezone = 12;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Returns the unboxed value from <code>getTimezone()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue timezone = 12;</code>
     * @return string|null
     */
    public function getTimezoneValue()
    {
        $wrapper = $this->getTimezone();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue timezone = 12;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTimezone($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->timezone = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue timezone = 12;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTimezoneValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setTimezone($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 13;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp createdAt = 13;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->createdAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value lastVisitCountry = 14;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getLastVisitCountry()
    {
        return $this->lastVisitCountry;
    }

    /**
     * Returns the unboxed value from <code>getLastVisitCountry()</code>

     * Generated from protobuf field <code>.google.protobuf.Int32Value lastVisitCountry = 14;</code>
     * @return int|null
     */
    public function getLastVisitCountryValue()
    {
        $wrapper = $this->getLastVisitCountry();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Int32Value lastVisitCountry = 14;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setLastVisitCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->lastVisitCountry = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Generated from protobuf field <code>.google.protobuf.Int32Value lastVisitCountry = 14;</code>
     * @param int|null $var
     * @return $this
     */
    public function setLastVisitCountryValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int32Value(['value' => $var]);

        return $this->setLastVisitCountry($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue lastVisitCity = 15;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLastVisitCity()
    {
        return $this->lastVisitCity;
    }

    /**
     * Returns the unboxed value from <code>getLastVisitCity()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue lastVisitCity = 15;</code>
     * @return string|null
     */
    public function getLastVisitCityValue()
    {
        $wrapper = $this->getLastVisitCity();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue lastVisitCity = 15;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLastVisitCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->lastVisitCity = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue lastVisitCity = 15;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLastVisitCityValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setLastVisitCity($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp registeredAt = 16;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getRegisteredAt()
    {
        return $this->registeredAt;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp registeredAt = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRegisteredAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->registeredAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastVisitAt = 17;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastVisitAt()
    {
        return $this->lastVisitAt;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp lastVisitAt = 17;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastVisitAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->lastVisitAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue registrationFormName = 18;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getRegistrationFormName()
    {
        return $this->registrationFormName;
    }

    /**
     * Returns the unboxed value from <code>getRegistrationFormName()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue registrationFormName = 18;</code>
     * @return string|null
     */
    public function getRegistrationFormNameValue()
    {
        $wrapper = $this->getRegistrationFormName();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue registrationFormName = 18;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setRegistrationFormName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->registrationFormName = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue registrationFormName = 18;</code>
     * @param string|null $var
     * @return $this
     */
    public function setRegistrationFormNameValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setRegistrationFormName($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue countryOfRegistration = 19;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryOfRegistration()
    {
        return $this->countryOfRegistration;
    }

    /**
     * Returns the unboxed value from <code>getCountryOfRegistration()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue countryOfRegistration = 19;</code>
     * @return string|null
     */
    public function getCountryOfRegistrationValue()
    {
        $wrapper = $this->getCountryOfRegistration();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue countryOfRegistration = 19;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryOfRegistration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->countryOfRegistration = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue countryOfRegistration = 19;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryOfRegistrationValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setCountryOfRegistration($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationEmailStatus = 20;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getConfirmationEmailStatus()
    {
        return $this->confirmationEmailStatus;
    }

    /**
     * Returns the unboxed value from <code>getConfirmationEmailStatus()</code>

     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationEmailStatus = 20;</code>
     * @return bool|null
     */
    public function getConfirmationEmailStatusValue()
    {
        $wrapper = $this->getConfirmationEmailStatus();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationEmailStatus = 20;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setConfirmationEmailStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->confirmationEmailStatus = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationEmailStatus = 20;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setConfirmationEmailStatusValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);

        return $this->setConfirmationEmailStatus($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationPhoneStatus = 21;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getConfirmationPhoneStatus()
    {
        return $this->confirmationPhoneStatus;
    }

    /**
     * Returns the unboxed value from <code>getConfirmationPhoneStatus()</code>

     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationPhoneStatus = 21;</code>
     * @return bool|null
     */
    public function getConfirmationPhoneStatusValue()
    {
        $wrapper = $this->getConfirmationPhoneStatus();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationPhoneStatus = 21;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setConfirmationPhoneStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->confirmationPhoneStatus = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Generated from protobuf field <code>.google.protobuf.BoolValue confirmationPhoneStatus = 21;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setConfirmationPhoneStatusValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);

        return $this->setConfirmationPhoneStatus($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue phoneNumberPrefix = 22;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPhoneNumberPrefix()
    {
        return $this->phoneNumberPrefix;
    }

    /**
     * Returns the unboxed value from <code>getPhoneNumberPrefix()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue phoneNumberPrefix = 22;</code>
     * @return string|null
     */
    public function getPhoneNumberPrefixValue()
    {
        $wrapper = $this->getPhoneNumberPrefix();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue phoneNumberPrefix = 22;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPhoneNumberPrefix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->phoneNumberPrefix = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue phoneNumberPrefix = 22;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPhoneNumberPrefixValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setPhoneNumberPrefix($wrappedVar);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue defaultLanguage = 23;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Returns the unboxed value from <code>getDefaultLanguage()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue defaultLanguage = 23;</code>
     * @return string|null
     */
    public function getDefaultLanguageValue()
    {
        $wrapper = $this->getDefaultLanguage();

        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue defaultLanguage = 23;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDefaultLanguage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->defaultLanguage = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue defaultLanguage = 23;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDefaultLanguageValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);

        return $this->setDefaultLanguage($wrappedVar);
    }
}
