<?php

namespace ContainerM4W7xwx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder330a8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b4d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7477 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getConnection', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getMetadataFactory', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getExpressionBuilder', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'beginTransaction', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getCache', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'transactional', array('func' => $func), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'commit', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->commit();
    }

    public function rollback()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'rollback', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'createQuery', array('dql' => $dql), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'createQueryBuilder', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'flush', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'clear', array('entityName' => $entityName), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->clear($entityName);
    }

    public function close()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'close', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->close();
    }

    public function persist($entity)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'persist', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'remove', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'refresh', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'detach', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'merge', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'contains', array('entity' => $entity), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getEventManager', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getConfiguration', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'isOpen', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getUnitOfWork', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getProxyFactory', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'getFilters', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'isFiltersStateClean', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'hasFilters', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return $this->valueHolder330a8->hasFilters();
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

        $instance->initializer5b4d6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder330a8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder330a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder330a8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, '__get', ['name' => $name], $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        if (isset(self::$publicPropertiese7477[$name])) {
            return $this->valueHolder330a8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder330a8;

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

        $targetObject = $this->valueHolder330a8;
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
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder330a8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder330a8;
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
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, '__isset', array('name' => $name), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder330a8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder330a8;
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
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, '__unset', array('name' => $name), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder330a8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder330a8;
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
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, '__clone', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        $this->valueHolder330a8 = clone $this->valueHolder330a8;
    }

    public function __sleep()
    {
        $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, '__sleep', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;

        return array('valueHolder330a8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b4d6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b4d6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b4d6 && ($this->initializer5b4d6->__invoke($valueHolder330a8, $this, 'initializeProxy', array(), $this->initializer5b4d6) || 1) && $this->valueHolder330a8 = $valueHolder330a8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder330a8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder330a8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
