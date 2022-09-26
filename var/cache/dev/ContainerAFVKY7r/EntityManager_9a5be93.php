<?php

namespace ContainerAFVKY7r;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder783bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf5969 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a32a = [
        
    ];

    public function getConnection()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getConnection', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getMetadataFactory', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getExpressionBuilder', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'beginTransaction', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getCache', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'transactional', array('func' => $func), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'commit', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->commit();
    }

    public function rollback()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'rollback', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getClassMetadata', array('className' => $className), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'createQuery', array('dql' => $dql), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'createNamedQuery', array('name' => $name), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'createQueryBuilder', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'flush', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'clear', array('entityName' => $entityName), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->clear($entityName);
    }

    public function close()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'close', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->close();
    }

    public function persist($entity)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'persist', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'remove', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'refresh', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'detach', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'merge', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'contains', array('entity' => $entity), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getEventManager', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getConfiguration', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'isOpen', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getUnitOfWork', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getProxyFactory', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'initializeObject', array('obj' => $obj), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'getFilters', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'isFiltersStateClean', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'hasFilters', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return $this->valueHolder783bc->hasFilters();
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

        $instance->initializerf5969 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder783bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder783bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder783bc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, '__get', ['name' => $name], $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        if (isset(self::$publicProperties9a32a[$name])) {
            return $this->valueHolder783bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder783bc;

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

        $targetObject = $this->valueHolder783bc;
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
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder783bc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder783bc;
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
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, '__isset', array('name' => $name), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder783bc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder783bc;
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
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, '__unset', array('name' => $name), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder783bc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder783bc;
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
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, '__clone', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        $this->valueHolder783bc = clone $this->valueHolder783bc;
    }

    public function __sleep()
    {
        $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, '__sleep', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;

        return array('valueHolder783bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf5969 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf5969;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf5969 && ($this->initializerf5969->__invoke($valueHolder783bc, $this, 'initializeProxy', array(), $this->initializerf5969) || 1) && $this->valueHolder783bc = $valueHolder783bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder783bc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder783bc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
