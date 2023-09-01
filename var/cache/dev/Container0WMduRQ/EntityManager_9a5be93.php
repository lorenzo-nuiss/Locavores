<?php

namespace Container0WMduRQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2c486 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb80d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties76644 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getConnection', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getMetadataFactory', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getExpressionBuilder', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'beginTransaction', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getCache', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'transactional', array('func' => $func), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'commit', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->commit();
    }

    public function rollback()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'rollback', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getClassMetadata', array('className' => $className), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'createQuery', array('dql' => $dql), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'createNamedQuery', array('name' => $name), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'createQueryBuilder', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'flush', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'clear', array('entityName' => $entityName), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->clear($entityName);
    }

    public function close()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'close', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->close();
    }

    public function persist($entity)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'persist', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'remove', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'refresh', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'detach', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'merge', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'contains', array('entity' => $entity), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getEventManager', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getConfiguration', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'isOpen', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getUnitOfWork', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getProxyFactory', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'initializeObject', array('obj' => $obj), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'getFilters', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'isFiltersStateClean', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'hasFilters', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return $this->valueHolder2c486->hasFilters();
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

        $instance->initializerb80d1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2c486) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c486 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2c486->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, '__get', ['name' => $name], $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        if (isset(self::$publicProperties76644[$name])) {
            return $this->valueHolder2c486->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c486;

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

        $targetObject = $this->valueHolder2c486;
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
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c486;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2c486;
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
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, '__isset', array('name' => $name), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c486;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2c486;
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
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, '__unset', array('name' => $name), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c486;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2c486;
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
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, '__clone', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        $this->valueHolder2c486 = clone $this->valueHolder2c486;
    }

    public function __sleep()
    {
        $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, '__sleep', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;

        return array('valueHolder2c486');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb80d1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb80d1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb80d1 && ($this->initializerb80d1->__invoke($valueHolder2c486, $this, 'initializeProxy', array(), $this->initializerb80d1) || 1) && $this->valueHolder2c486 = $valueHolder2c486;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c486;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c486;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
