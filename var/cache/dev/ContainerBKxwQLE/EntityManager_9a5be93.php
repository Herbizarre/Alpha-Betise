<?php

namespace ContainerBKxwQLE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9fc8e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer455db = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties326ca = [
        
    ];

    public function getConnection()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getConnection', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getMetadataFactory', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getExpressionBuilder', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'beginTransaction', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getCache', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'transactional', array('func' => $func), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'commit', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->commit();
    }

    public function rollback()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'rollback', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getClassMetadata', array('className' => $className), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'createQuery', array('dql' => $dql), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'createNamedQuery', array('name' => $name), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'createQueryBuilder', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'flush', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'clear', array('entityName' => $entityName), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->clear($entityName);
    }

    public function close()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'close', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->close();
    }

    public function persist($entity)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'persist', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'remove', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'refresh', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'detach', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'merge', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'contains', array('entity' => $entity), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getEventManager', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getConfiguration', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'isOpen', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getUnitOfWork', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getProxyFactory', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'initializeObject', array('obj' => $obj), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'getFilters', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'isFiltersStateClean', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'hasFilters', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return $this->valueHolder9fc8e->hasFilters();
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

        $instance->initializer455db = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9fc8e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9fc8e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9fc8e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, '__get', ['name' => $name], $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        if (isset(self::$publicProperties326ca[$name])) {
            return $this->valueHolder9fc8e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc8e;

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

        $targetObject = $this->valueHolder9fc8e;
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
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc8e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9fc8e;
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
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, '__isset', array('name' => $name), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc8e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9fc8e;
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
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, '__unset', array('name' => $name), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fc8e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9fc8e;
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
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, '__clone', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        $this->valueHolder9fc8e = clone $this->valueHolder9fc8e;
    }

    public function __sleep()
    {
        $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, '__sleep', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;

        return array('valueHolder9fc8e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer455db = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer455db;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer455db && ($this->initializer455db->__invoke($valueHolder9fc8e, $this, 'initializeProxy', array(), $this->initializer455db) || 1) && $this->valueHolder9fc8e = $valueHolder9fc8e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fc8e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fc8e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
