<?php

namespace ContainerVktK5Ff;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf546e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerce77e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4c594 = [
        
    ];

    public function getConnection()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getConnection', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getMetadataFactory', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getExpressionBuilder', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'beginTransaction', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getCache', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'transactional', array('func' => $func), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'commit', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->commit();
    }

    public function rollback()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'rollback', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getClassMetadata', array('className' => $className), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'createQuery', array('dql' => $dql), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'createNamedQuery', array('name' => $name), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'createQueryBuilder', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'flush', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'clear', array('entityName' => $entityName), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->clear($entityName);
    }

    public function close()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'close', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->close();
    }

    public function persist($entity)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'persist', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'remove', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'refresh', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'detach', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'merge', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'contains', array('entity' => $entity), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getEventManager', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getConfiguration', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'isOpen', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getUnitOfWork', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getProxyFactory', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'initializeObject', array('obj' => $obj), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'getFilters', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'isFiltersStateClean', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'hasFilters', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return $this->valueHolderf546e->hasFilters();
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

        $instance->initializerce77e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf546e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf546e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf546e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, '__get', ['name' => $name], $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        if (isset(self::$publicProperties4c594[$name])) {
            return $this->valueHolderf546e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf546e;

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

        $targetObject = $this->valueHolderf546e;
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
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf546e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf546e;
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
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, '__isset', array('name' => $name), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf546e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf546e;
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
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, '__unset', array('name' => $name), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf546e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf546e;
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
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, '__clone', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        $this->valueHolderf546e = clone $this->valueHolderf546e;
    }

    public function __sleep()
    {
        $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, '__sleep', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;

        return array('valueHolderf546e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerce77e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerce77e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerce77e && ($this->initializerce77e->__invoke($valueHolderf546e, $this, 'initializeProxy', array(), $this->initializerce77e) || 1) && $this->valueHolderf546e = $valueHolderf546e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf546e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf546e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
