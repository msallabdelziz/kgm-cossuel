<?php

namespace ContainerQuesjqN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder14085 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb34a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb4d1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getConnection', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getMetadataFactory', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getExpressionBuilder', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'beginTransaction', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getCache', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'transactional', array('func' => $func), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'commit', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->commit();
    }

    public function rollback()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'rollback', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getClassMetadata', array('className' => $className), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'createQuery', array('dql' => $dql), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'createNamedQuery', array('name' => $name), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'createQueryBuilder', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'flush', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'clear', array('entityName' => $entityName), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->clear($entityName);
    }

    public function close()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'close', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->close();
    }

    public function persist($entity)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'persist', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'remove', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'refresh', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'detach', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'merge', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'contains', array('entity' => $entity), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getEventManager', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getConfiguration', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'isOpen', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getUnitOfWork', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getProxyFactory', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'initializeObject', array('obj' => $obj), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'getFilters', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'isFiltersStateClean', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'hasFilters', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return $this->valueHolder14085->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb34a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder14085) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder14085 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder14085->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, '__get', ['name' => $name], $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        if (isset(self::$publicPropertiescb4d1[$name])) {
            return $this->valueHolder14085->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14085;

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

        $targetObject = $this->valueHolder14085;
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
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14085;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder14085;
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
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, '__isset', array('name' => $name), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14085;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder14085;
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
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, '__unset', array('name' => $name), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14085;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder14085;
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
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, '__clone', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        $this->valueHolder14085 = clone $this->valueHolder14085;
    }

    public function __sleep()
    {
        $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, '__sleep', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;

        return array('valueHolder14085');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb34a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb34a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb34a8 && ($this->initializerb34a8->__invoke($valueHolder14085, $this, 'initializeProxy', array(), $this->initializerb34a8) || 1) && $this->valueHolder14085 = $valueHolder14085;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder14085;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder14085;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
