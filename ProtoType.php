<?php

class ProtoType {
    public $__proto__;

    public function __construct(ProtoType $proto = null)
    {
        $this->__proto__ = $proto;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }

        if ($this->__proto__ !== null) {
            return $this->__proto__->$name;
        }

        return null;
    }

    public function __call($name, $arguments)
    {
        if ($this->$name instanceof Closure) {
            return $this->$name->bindTo($this)->__invoke($arguments);
        }

        throw new BadMethodCallException("Object has no method '$name'");
    }
}

