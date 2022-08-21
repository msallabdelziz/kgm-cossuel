<?php

namespace ContainerBt2szyx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getConnection', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getMetadataFactory', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getExpressionBuilder', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'beginTransaction', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getCache', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getCache();
    }

    public function transactional($func)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'transactional', array('func' => $func), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'wrapInTransaction', array('func' => $func), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'commit', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->commit();
    }

    public function rollback()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'rollback', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getClassMetadata', array('className' => $className), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'createQuery', array('dql' => $dql), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'createNamedQuery', array('name' => $name), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'createQueryBuilder', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'flush', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'clear', array('entityName' => $entityName), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->clear($entityName);
    }

    public function close()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'close', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->close();
    }

    public function persist($entity)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'persist', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'remove', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'refresh', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'detach', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'merge', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getRepository', array('entityName' => $entityName), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'contains', array('entity' => $entity), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getEventManager', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getConfiguration', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'isOpen', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getUnitOfWork', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getProxyFactory', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'initializeObject', array('obj' => $obj), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'getFilters', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'isFiltersStateClean', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, 'hasFilters', array(), $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        return $this->valueHolder59952->hasFilters();
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

        $instance->initializera65c1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder59952) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59952 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59952->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera65c1 && ($this->initializera65c1->__invoke($valueHolder59952, $this, '__get', ['name' => $name], $this->initializera65c1) || 1) && $this->valueHolder59952 = $valueHolder59952;

        if (isset(self::$publicProperties1a88d[$name])) {
            return $this->valueHolder59952->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
