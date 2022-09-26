<?php

namespace ContainerJ1xUdP4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderea789 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer98738 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4a18 = [
        
    ];

    public function getConnection()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getConnection', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getMetadataFactory', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getExpressionBuilder', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'beginTransaction', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getCache', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getCache();
    }

    public function transactional($func)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'transactional', array('func' => $func), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'wrapInTransaction', array('func' => $func), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'commit', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->commit();
    }

    public function rollback()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'rollback', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getClassMetadata', array('className' => $className), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'createQuery', array('dql' => $dql), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'createNamedQuery', array('name' => $name), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'createQueryBuilder', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'flush', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'clear', array('entityName' => $entityName), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->clear($entityName);
    }

    public function close()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'close', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->close();
    }

    public function persist($entity)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'persist', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'remove', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'refresh', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'detach', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'merge', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getRepository', array('entityName' => $entityName), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'contains', array('entity' => $entity), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getEventManager', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getConfiguration', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'isOpen', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getUnitOfWork', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getProxyFactory', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'initializeObject', array('obj' => $obj), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'getFilters', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'isFiltersStateClean', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'hasFilters', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return $this->valueHolderea789->hasFilters();
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

        $instance->initializer98738 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderea789) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderea789 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderea789->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, '__get', ['name' => $name], $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        if (isset(self::$publicPropertiesb4a18[$name])) {
            return $this->valueHolderea789->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea789;

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

        $targetObject = $this->valueHolderea789;
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
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea789;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderea789;
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
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, '__isset', array('name' => $name), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea789;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderea789;
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
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, '__unset', array('name' => $name), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderea789;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderea789;
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
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, '__clone', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        $this->valueHolderea789 = clone $this->valueHolderea789;
    }

    public function __sleep()
    {
        $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, '__sleep', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;

        return array('valueHolderea789');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer98738 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer98738;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer98738 && ($this->initializer98738->__invoke($valueHolderea789, $this, 'initializeProxy', array(), $this->initializer98738) || 1) && $this->valueHolderea789 = $valueHolderea789;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderea789;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderea789;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
