<?php

namespace ContainerVfcLhxR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder23409 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4056a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesabdb1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getConnection', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getMetadataFactory', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getExpressionBuilder', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'beginTransaction', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getCache', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'transactional', array('func' => $func), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'commit', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->commit();
    }

    public function rollback()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'rollback', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getClassMetadata', array('className' => $className), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'createQuery', array('dql' => $dql), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'createNamedQuery', array('name' => $name), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'createQueryBuilder', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'flush', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'clear', array('entityName' => $entityName), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->clear($entityName);
    }

    public function close()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'close', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->close();
    }

    public function persist($entity)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'persist', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'remove', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'refresh', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'detach', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'merge', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'contains', array('entity' => $entity), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getEventManager', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getConfiguration', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'isOpen', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getUnitOfWork', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getProxyFactory', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'initializeObject', array('obj' => $obj), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'getFilters', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'isFiltersStateClean', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'hasFilters', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return $this->valueHolder23409->hasFilters();
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

        $instance->initializer4056a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder23409) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23409 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder23409->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, '__get', ['name' => $name], $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        if (isset(self::$publicPropertiesabdb1[$name])) {
            return $this->valueHolder23409->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23409;

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

        $targetObject = $this->valueHolder23409;
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
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23409;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23409;
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
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, '__isset', array('name' => $name), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23409;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder23409;
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
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, '__unset', array('name' => $name), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23409;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder23409;
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
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, '__clone', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        $this->valueHolder23409 = clone $this->valueHolder23409;
    }

    public function __sleep()
    {
        $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, '__sleep', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;

        return array('valueHolder23409');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4056a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4056a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4056a && ($this->initializer4056a->__invoke($valueHolder23409, $this, 'initializeProxy', array(), $this->initializer4056a) || 1) && $this->valueHolder23409 = $valueHolder23409;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23409;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23409;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
