<?php

namespace ContainerJa7qilq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc4ac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer74780 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseec6d = [
        
    ];

    public function getConnection()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getConnection', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getMetadataFactory', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getExpressionBuilder', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'beginTransaction', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getCache', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getCache();
    }

    public function transactional($func)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'transactional', array('func' => $func), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'wrapInTransaction', array('func' => $func), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'commit', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->commit();
    }

    public function rollback()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'rollback', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getClassMetadata', array('className' => $className), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'createQuery', array('dql' => $dql), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'createNamedQuery', array('name' => $name), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'createQueryBuilder', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'flush', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'clear', array('entityName' => $entityName), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->clear($entityName);
    }

    public function close()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'close', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->close();
    }

    public function persist($entity)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'persist', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'remove', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'refresh', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'detach', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'merge', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'contains', array('entity' => $entity), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getEventManager', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getConfiguration', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'isOpen', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getUnitOfWork', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getProxyFactory', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'initializeObject', array('obj' => $obj), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'getFilters', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'isFiltersStateClean', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'hasFilters', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return $this->valueHoldercc4ac->hasFilters();
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

        $instance->initializer74780 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercc4ac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc4ac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc4ac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, '__get', ['name' => $name], $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        if (isset(self::$publicPropertieseec6d[$name])) {
            return $this->valueHoldercc4ac->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4ac;

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

        $targetObject = $this->valueHoldercc4ac;
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
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4ac;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc4ac;
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
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, '__isset', array('name' => $name), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4ac;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc4ac;
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
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, '__unset', array('name' => $name), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc4ac;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc4ac;
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
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, '__clone', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        $this->valueHoldercc4ac = clone $this->valueHoldercc4ac;
    }

    public function __sleep()
    {
        $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, '__sleep', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;

        return array('valueHoldercc4ac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer74780 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer74780;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer74780 && ($this->initializer74780->__invoke($valueHoldercc4ac, $this, 'initializeProxy', array(), $this->initializer74780) || 1) && $this->valueHoldercc4ac = $valueHoldercc4ac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc4ac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc4ac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
