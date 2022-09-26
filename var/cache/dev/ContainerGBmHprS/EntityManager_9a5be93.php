<?php

namespace ContainerGBmHprS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6211d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8ae57 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7bd2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getConnection', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getMetadataFactory', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getExpressionBuilder', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'beginTransaction', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getCache', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'transactional', array('func' => $func), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'commit', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->commit();
    }

    public function rollback()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'rollback', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getClassMetadata', array('className' => $className), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'createQuery', array('dql' => $dql), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'createNamedQuery', array('name' => $name), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'createQueryBuilder', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'flush', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'clear', array('entityName' => $entityName), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->clear($entityName);
    }

    public function close()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'close', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->close();
    }

    public function persist($entity)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'persist', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'remove', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'refresh', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'detach', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'merge', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'contains', array('entity' => $entity), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getEventManager', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getConfiguration', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'isOpen', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getUnitOfWork', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getProxyFactory', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'initializeObject', array('obj' => $obj), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'getFilters', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'isFiltersStateClean', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'hasFilters', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return $this->valueHolder6211d->hasFilters();
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

        $instance->initializer8ae57 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6211d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6211d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6211d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, '__get', ['name' => $name], $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        if (isset(self::$publicPropertiesf7bd2[$name])) {
            return $this->valueHolder6211d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6211d;

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

        $targetObject = $this->valueHolder6211d;
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
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6211d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6211d;
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
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, '__isset', array('name' => $name), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6211d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6211d;
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
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, '__unset', array('name' => $name), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6211d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6211d;
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
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, '__clone', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        $this->valueHolder6211d = clone $this->valueHolder6211d;
    }

    public function __sleep()
    {
        $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, '__sleep', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;

        return array('valueHolder6211d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8ae57 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8ae57;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8ae57 && ($this->initializer8ae57->__invoke($valueHolder6211d, $this, 'initializeProxy', array(), $this->initializer8ae57) || 1) && $this->valueHolder6211d = $valueHolder6211d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6211d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6211d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
