<?php

namespace ContainerUKCScv8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbaaf8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6cc63 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0eacf = [
        
    ];

    public function getConnection()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getConnection', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getMetadataFactory', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getExpressionBuilder', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'beginTransaction', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getCache', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'transactional', array('func' => $func), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'commit', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->commit();
    }

    public function rollback()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'rollback', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getClassMetadata', array('className' => $className), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'createQuery', array('dql' => $dql), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'createNamedQuery', array('name' => $name), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'createQueryBuilder', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'flush', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'clear', array('entityName' => $entityName), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->clear($entityName);
    }

    public function close()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'close', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->close();
    }

    public function persist($entity)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'persist', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'remove', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'refresh', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'detach', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'merge', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'contains', array('entity' => $entity), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getEventManager', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getConfiguration', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'isOpen', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getUnitOfWork', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getProxyFactory', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'initializeObject', array('obj' => $obj), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'getFilters', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'isFiltersStateClean', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'hasFilters', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return $this->valueHolderbaaf8->hasFilters();
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

        $instance->initializer6cc63 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderbaaf8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbaaf8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbaaf8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, '__get', ['name' => $name], $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        if (isset(self::$publicProperties0eacf[$name])) {
            return $this->valueHolderbaaf8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaaf8;

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

        $targetObject = $this->valueHolderbaaf8;
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
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaaf8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbaaf8;
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
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, '__isset', array('name' => $name), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaaf8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbaaf8;
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
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, '__unset', array('name' => $name), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaaf8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbaaf8;
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
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, '__clone', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        $this->valueHolderbaaf8 = clone $this->valueHolderbaaf8;
    }

    public function __sleep()
    {
        $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, '__sleep', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;

        return array('valueHolderbaaf8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6cc63 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6cc63;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6cc63 && ($this->initializer6cc63->__invoke($valueHolderbaaf8, $this, 'initializeProxy', array(), $this->initializer6cc63) || 1) && $this->valueHolderbaaf8 = $valueHolderbaaf8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbaaf8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbaaf8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
