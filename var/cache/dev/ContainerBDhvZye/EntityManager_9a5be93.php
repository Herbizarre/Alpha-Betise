<?php

namespace ContainerBDhvZye;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere5a22 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc8f8e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7039 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getConnection', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getMetadataFactory', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getExpressionBuilder', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'beginTransaction', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getCache', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'transactional', array('func' => $func), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'commit', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->commit();
    }

    public function rollback()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'rollback', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getClassMetadata', array('className' => $className), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'createQuery', array('dql' => $dql), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'createNamedQuery', array('name' => $name), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'createQueryBuilder', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'flush', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'clear', array('entityName' => $entityName), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->clear($entityName);
    }

    public function close()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'close', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->close();
    }

    public function persist($entity)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'persist', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'remove', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'refresh', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'detach', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'merge', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'contains', array('entity' => $entity), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getEventManager', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getConfiguration', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'isOpen', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getUnitOfWork', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getProxyFactory', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'initializeObject', array('obj' => $obj), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'getFilters', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'isFiltersStateClean', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'hasFilters', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return $this->valueHoldere5a22->hasFilters();
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

        $instance->initializerc8f8e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere5a22) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere5a22 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere5a22->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, '__get', ['name' => $name], $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        if (isset(self::$publicPropertiesc7039[$name])) {
            return $this->valueHoldere5a22->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5a22;

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

        $targetObject = $this->valueHoldere5a22;
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
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5a22;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere5a22;
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
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, '__isset', array('name' => $name), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5a22;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere5a22;
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
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, '__unset', array('name' => $name), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere5a22;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere5a22;
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
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, '__clone', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        $this->valueHoldere5a22 = clone $this->valueHoldere5a22;
    }

    public function __sleep()
    {
        $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, '__sleep', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;

        return array('valueHoldere5a22');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc8f8e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc8f8e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc8f8e && ($this->initializerc8f8e->__invoke($valueHoldere5a22, $this, 'initializeProxy', array(), $this->initializerc8f8e) || 1) && $this->valueHoldere5a22 = $valueHoldere5a22;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere5a22;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere5a22;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
