<?php

namespace ContainerJVmEO8H;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbfbd2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb056b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f715 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getConnection', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getMetadataFactory', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getExpressionBuilder', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'beginTransaction', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getCache', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'transactional', array('func' => $func), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'commit', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->commit();
    }

    public function rollback()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'rollback', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getClassMetadata', array('className' => $className), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'createQuery', array('dql' => $dql), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'createNamedQuery', array('name' => $name), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'createQueryBuilder', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'flush', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'clear', array('entityName' => $entityName), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->clear($entityName);
    }

    public function close()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'close', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->close();
    }

    public function persist($entity)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'persist', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'remove', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'refresh', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'detach', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'merge', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'contains', array('entity' => $entity), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getEventManager', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getConfiguration', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'isOpen', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getUnitOfWork', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getProxyFactory', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'initializeObject', array('obj' => $obj), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'getFilters', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'isFiltersStateClean', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'hasFilters', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return $this->valueHolderbfbd2->hasFilters();
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

        $instance->initializerb056b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbfbd2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbfbd2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbfbd2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, '__get', ['name' => $name], $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        if (isset(self::$publicProperties2f715[$name])) {
            return $this->valueHolderbfbd2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfbd2;

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

        $targetObject = $this->valueHolderbfbd2;
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
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfbd2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbfbd2;
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
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, '__isset', array('name' => $name), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfbd2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbfbd2;
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
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, '__unset', array('name' => $name), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfbd2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbfbd2;
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
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, '__clone', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        $this->valueHolderbfbd2 = clone $this->valueHolderbfbd2;
    }

    public function __sleep()
    {
        $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, '__sleep', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;

        return array('valueHolderbfbd2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb056b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb056b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb056b && ($this->initializerb056b->__invoke($valueHolderbfbd2, $this, 'initializeProxy', array(), $this->initializerb056b) || 1) && $this->valueHolderbfbd2 = $valueHolderbfbd2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbfbd2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbfbd2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
