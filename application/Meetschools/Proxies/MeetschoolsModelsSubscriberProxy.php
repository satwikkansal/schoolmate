<?php

namespace Meetschools\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MeetschoolsModelsSubscriberProxy extends \Meetschools\Models\Subscriber implements \Doctrine\ORM\Proxy\Proxy {

    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;

    public function __construct($entityPersister, $identifier) {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }

    /** @private */
    public function __load() {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    public function id() {
        $this->__load();
        return parent::id();
    }

    public function user() {
        $this->__load();
        return parent::user();
    }

    public function set_user(\Meetschools\Models\User $user) {
        $this->__load();
        return parent::set_user($user);
    }

    public function set_name($name) {
        $this->__load();
        return parent::set_name($name);
    }

    public function name() {
        $this->__load();
        return parent::name();
    }

    public function set_email($email) {
        $this->__load();
        return parent::set_email($email);
    }

    public function email() {
        $this->__load();
        return parent::email();
    }

    public function set_status($status) {
        $this->__load();
        return parent::set_status($status);
    }

    public function status() {
        $this->__load();
        return parent::status();
    }

    public function set_unique_key($unique_key) {
        $this->__load();
        return parent::set_unique_key($unique_key);
    }

    public function unique_key() {
        $this->__load();
        return parent::unique_key();
    }

    public function set_utm_source($utm_source) {
        $this->__load();
        return parent::set_utm_source($utm_source);
    }

    public function utm_source() {
        $this->__load();
        return parent::utm_source();
    }

    public function set_utm_medium($utm_medium) {
        $this->__load();
        return parent::set_utm_medium($utm_medium);
    }

    public function utm_medium() {
        $this->__load();
        return parent::utm_medium();
    }

    public function set_utm_campaign($utm_campaign) {
        $this->__load();
        return parent::set_utm_campaign($utm_campaign);
    }

    public function utm_campaign() {
        $this->__load();
        return parent::utm_campaign();
    }

    public function set_created_at($created_at) {
        $this->__load();
        return parent::set_created_at($created_at);
    }

    public function created_at() {
        $this->__load();
        return parent::created_at();
    }

    public function set_last_updated_at($last_updated_at) {
        $this->__load();
        return parent::set_last_updated_at($last_updated_at);
    }

    public function last_updated_at() {
        $this->__load();
        return parent::last_updated_at();
    }

    public function __toString() {
        $this->__load();
        return parent::__toString();
    }

    public function &to_array() {
        $this->__load();
        return parent::to_array();
    }

    public function on_pre_presist() {
        $this->__load();
        return parent::on_pre_presist();
    }

    public function on_pre_update() {
        $this->__load();
        return parent::on_pre_update();
    }

    public function on_pre_remove() {
        $this->__load();
        return parent::on_pre_remove();
    }

    public function on_post_load() {
        $this->__load();
        return parent::on_post_load();
    }

    public function __sleep() {
        return array('__isInitialized__', 'id', 'user', 'name', 'email', 'status', 'unique_key', 'utm_source', 'utm_medium', 'utm_campaign', 'created_at', 'last_updated_at');
    }

    public function __clone() {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

}
