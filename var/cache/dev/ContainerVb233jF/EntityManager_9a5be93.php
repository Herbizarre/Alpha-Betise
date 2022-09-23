<?php

namespace ContainerVb233jF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3c7e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8306a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15352 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getConnection', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getMetadataFactory', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getExpressionBuilder', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'beginTransaction', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getCache', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'transactional', array('func' => $func), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'commit', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->commit();
    }

    public function rollback()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'rollback', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getClassMetadata', array('className' => $className), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'createQuery', array('dql' => $dql), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'createNamedQuery', array('name' => $name), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'createQueryBuilder', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'flush', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'clear', array('entityName' => $entityName), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->clear($entityName);
    }

    public function close()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'close', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->close();
    }

    public function persist($entity)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'persist', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'remove', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'refresh', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'detach', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'merge', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'contains', array('entity' => $entity), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getEventManager', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getConfiguration', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'isOpen', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getUnitOfWork', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getProxyFactory', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'initializeObject', array('obj' => $obj), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'getFilters', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'isFiltersStateClean', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'hasFilters', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return $this->valueHoldera3c7e->hasFilters();
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

        $instance->initializer8306a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera3c7e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3c7e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3c7e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, '__get', ['name' => $name], $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        if (isset(self::$publicProperties15352[$name])) {
            return $this->valueHoldera3c7e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c7e;

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

        $targetObject = $this->valueHoldera3c7e;
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
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c7e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3c7e;
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
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, '__isset', array('name' => $name), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c7e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3c7e;
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
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, '__unset', array('name' => $name), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c7e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3c7e;
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
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, '__clone', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        $this->valueHoldera3c7e = clone $this->valueHoldera3c7e;
    }

    public function __sleep()
    {
        $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, '__sleep', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;

        return array('valueHoldera3c7e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8306a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8306a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8306a && ($this->initializer8306a->__invoke($valueHoldera3c7e, $this, 'initializeProxy', array(), $this->initializer8306a) || 1) && $this->valueHoldera3c7e = $valueHoldera3c7e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3c7e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3c7e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
