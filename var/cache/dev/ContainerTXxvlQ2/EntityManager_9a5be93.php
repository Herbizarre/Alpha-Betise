<?php

namespace ContainerTXxvlQ2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0f608 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer23cc6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f800 = [
        
    ];

    public function getConnection()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getConnection', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getMetadataFactory', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getExpressionBuilder', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'beginTransaction', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getCache', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getCache();
    }

    public function transactional($func)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'transactional', array('func' => $func), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'wrapInTransaction', array('func' => $func), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'commit', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->commit();
    }

    public function rollback()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'rollback', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getClassMetadata', array('className' => $className), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'createQuery', array('dql' => $dql), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'createNamedQuery', array('name' => $name), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'createQueryBuilder', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'flush', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'clear', array('entityName' => $entityName), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->clear($entityName);
    }

    public function close()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'close', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->close();
    }

    public function persist($entity)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'persist', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'remove', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'refresh', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'detach', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'merge', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getRepository', array('entityName' => $entityName), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'contains', array('entity' => $entity), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getEventManager', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getConfiguration', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'isOpen', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getUnitOfWork', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getProxyFactory', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'initializeObject', array('obj' => $obj), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'getFilters', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'isFiltersStateClean', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'hasFilters', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return $this->valueHolder0f608->hasFilters();
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

        $instance->initializer23cc6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0f608) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0f608 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0f608->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, '__get', ['name' => $name], $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        if (isset(self::$publicProperties6f800[$name])) {
            return $this->valueHolder0f608->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f608;

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

        $targetObject = $this->valueHolder0f608;
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
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f608;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0f608;
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
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, '__isset', array('name' => $name), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f608;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0f608;
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
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, '__unset', array('name' => $name), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f608;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0f608;
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
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, '__clone', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        $this->valueHolder0f608 = clone $this->valueHolder0f608;
    }

    public function __sleep()
    {
        $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, '__sleep', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;

        return array('valueHolder0f608');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer23cc6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer23cc6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer23cc6 && ($this->initializer23cc6->__invoke($valueHolder0f608, $this, 'initializeProxy', array(), $this->initializer23cc6) || 1) && $this->valueHolder0f608 = $valueHolder0f608;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0f608;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0f608;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
