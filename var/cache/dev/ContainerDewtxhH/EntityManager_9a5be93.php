<?php

namespace ContainerDewtxhH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec992 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer834c1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7beb3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getConnection', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getMetadataFactory', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getExpressionBuilder', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'beginTransaction', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getCache', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getCache();
    }

    public function transactional($func)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'transactional', array('func' => $func), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'wrapInTransaction', array('func' => $func), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'commit', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->commit();
    }

    public function rollback()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'rollback', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getClassMetadata', array('className' => $className), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'createQuery', array('dql' => $dql), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'createNamedQuery', array('name' => $name), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'createQueryBuilder', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'flush', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'clear', array('entityName' => $entityName), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->clear($entityName);
    }

    public function close()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'close', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->close();
    }

    public function persist($entity)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'persist', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'remove', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'refresh', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'detach', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'merge', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getRepository', array('entityName' => $entityName), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'contains', array('entity' => $entity), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getEventManager', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getConfiguration', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'isOpen', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getUnitOfWork', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getProxyFactory', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'initializeObject', array('obj' => $obj), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'getFilters', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'isFiltersStateClean', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'hasFilters', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return $this->valueHolderec992->hasFilters();
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

        $instance->initializer834c1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec992) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec992 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec992->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, '__get', ['name' => $name], $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        if (isset(self::$publicProperties7beb3[$name])) {
            return $this->valueHolderec992->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec992;

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

        $targetObject = $this->valueHolderec992;
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
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec992;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec992;
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
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, '__isset', array('name' => $name), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec992;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec992;
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
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, '__unset', array('name' => $name), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec992;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec992;
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
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, '__clone', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        $this->valueHolderec992 = clone $this->valueHolderec992;
    }

    public function __sleep()
    {
        $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, '__sleep', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;

        return array('valueHolderec992');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer834c1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer834c1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer834c1 && ($this->initializer834c1->__invoke($valueHolderec992, $this, 'initializeProxy', array(), $this->initializer834c1) || 1) && $this->valueHolderec992 = $valueHolderec992;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec992;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec992;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
