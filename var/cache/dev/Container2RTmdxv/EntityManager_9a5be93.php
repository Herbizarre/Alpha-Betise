<?php

namespace Container2RTmdxv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf677b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82a90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6db56 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getConnection', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getMetadataFactory', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getExpressionBuilder', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'beginTransaction', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getCache', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'transactional', array('func' => $func), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'commit', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->commit();
    }

    public function rollback()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'rollback', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getClassMetadata', array('className' => $className), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'createQuery', array('dql' => $dql), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'createNamedQuery', array('name' => $name), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'createQueryBuilder', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'flush', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'clear', array('entityName' => $entityName), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->clear($entityName);
    }

    public function close()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'close', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->close();
    }

    public function persist($entity)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'persist', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'remove', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'refresh', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'detach', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'merge', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'contains', array('entity' => $entity), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getEventManager', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getConfiguration', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'isOpen', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getUnitOfWork', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getProxyFactory', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'initializeObject', array('obj' => $obj), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'getFilters', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'isFiltersStateClean', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'hasFilters', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return $this->valueHolderf677b->hasFilters();
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

        $instance->initializer82a90 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf677b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf677b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf677b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, '__get', ['name' => $name], $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        if (isset(self::$publicProperties6db56[$name])) {
            return $this->valueHolderf677b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf677b;

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

        $targetObject = $this->valueHolderf677b;
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
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf677b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf677b;
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
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, '__isset', array('name' => $name), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf677b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf677b;
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
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, '__unset', array('name' => $name), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf677b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf677b;
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
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, '__clone', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        $this->valueHolderf677b = clone $this->valueHolderf677b;
    }

    public function __sleep()
    {
        $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, '__sleep', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;

        return array('valueHolderf677b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82a90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82a90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82a90 && ($this->initializer82a90->__invoke($valueHolderf677b, $this, 'initializeProxy', array(), $this->initializer82a90) || 1) && $this->valueHolderf677b = $valueHolderf677b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf677b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf677b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
