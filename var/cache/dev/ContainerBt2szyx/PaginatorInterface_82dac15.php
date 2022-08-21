<?php

namespace ContainerBt2szyx;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59952 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera65c1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1a88d = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        if ($this->valueHolder59952 === $returnValue = $this->valueHolder59952->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializera65c1 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder59952) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder59952 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__get', ['name' => $name], $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        if (isset(self::$publicProperties1a88d[$name])) {
            return $this->valueHolder59952->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59952;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59952;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59952;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59952;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__isset', array('name' => $name), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59952;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59952;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__unset', array('name' => $name), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59952;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59952;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__clone', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        $this->valueHolder59952 = clone $this->valueHolder59952;
    }

    public function __sleep()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__sleep', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return array('valueHolder59952');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera65c1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera65c1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'initializeProxy', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59952;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59952;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
