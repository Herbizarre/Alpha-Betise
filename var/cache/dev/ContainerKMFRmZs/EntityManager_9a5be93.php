<?php

namespace ContainerKMFRmZs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc025 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer86f3e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7c6b3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getConnection', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getMetadataFactory', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getExpressionBuilder', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'beginTransaction', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getCache', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getCache();
    }

    public function transactional($func)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'transactional', array('func' => $func), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'wrapInTransaction', array('func' => $func), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'commit', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->commit();
    }

    public function rollback()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'rollback', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getClassMetadata', array('className' => $className), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'createQuery', array('dql' => $dql), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'createNamedQuery', array('name' => $name), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'createQueryBuilder', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'flush', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'clear', array('entityName' => $entityName), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->clear($entityName);
    }

    public function close()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'close', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->close();
    }

    public function persist($entity)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'persist', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'remove', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'refresh', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'detach', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'merge', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getRepository', array('entityName' => $entityName), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'contains', array('entity' => $entity), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getEventManager', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getConfiguration', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'isOpen', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getUnitOfWork', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getProxyFactory', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'initializeObject', array('obj' => $obj), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'getFilters', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'isFiltersStateClean', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'hasFilters', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return $this->valueHoldercc025->hasFilters();
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

        $instance->initializer86f3e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercc025) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc025 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc025->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, '__get', ['name' => $name], $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        if (isset(self::$publicProperties7c6b3[$name])) {
            return $this->valueHoldercc025->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc025;

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

        $targetObject = $this->valueHoldercc025;
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
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc025;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc025;
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
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, '__isset', array('name' => $name), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc025;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc025;
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
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, '__unset', array('name' => $name), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc025;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc025;
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
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, '__clone', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        $this->valueHoldercc025 = clone $this->valueHoldercc025;
    }

    public function __sleep()
    {
        $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, '__sleep', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;

        return array('valueHoldercc025');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer86f3e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer86f3e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer86f3e && ($this->initializer86f3e->__invoke($valueHoldercc025, $this, 'initializeProxy', array(), $this->initializer86f3e) || 1) && $this->valueHoldercc025 = $valueHoldercc025;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc025;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc025;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
