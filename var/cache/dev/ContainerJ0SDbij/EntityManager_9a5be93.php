<?php

namespace ContainerJ0SDbij;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderadbba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer681a9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9685b = [
        
    ];

    public function getConnection()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getConnection', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getMetadataFactory', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getExpressionBuilder', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'beginTransaction', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getCache', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getCache();
    }

    public function transactional($func)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'transactional', array('func' => $func), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'wrapInTransaction', array('func' => $func), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'commit', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->commit();
    }

    public function rollback()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'rollback', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getClassMetadata', array('className' => $className), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'createQuery', array('dql' => $dql), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'createNamedQuery', array('name' => $name), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'createQueryBuilder', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'flush', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'clear', array('entityName' => $entityName), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->clear($entityName);
    }

    public function close()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'close', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->close();
    }

    public function persist($entity)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'persist', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'remove', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'refresh', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'detach', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'merge', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'contains', array('entity' => $entity), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getEventManager', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getConfiguration', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'isOpen', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getUnitOfWork', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getProxyFactory', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'initializeObject', array('obj' => $obj), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'getFilters', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'isFiltersStateClean', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'hasFilters', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return $this->valueHolderadbba->hasFilters();
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

        $instance->initializer681a9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderadbba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderadbba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderadbba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, '__get', ['name' => $name], $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        if (isset(self::$publicProperties9685b[$name])) {
            return $this->valueHolderadbba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadbba;

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

        $targetObject = $this->valueHolderadbba;
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
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadbba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderadbba;
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
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, '__isset', array('name' => $name), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadbba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderadbba;
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
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, '__unset', array('name' => $name), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderadbba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderadbba;
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
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, '__clone', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        $this->valueHolderadbba = clone $this->valueHolderadbba;
    }

    public function __sleep()
    {
        $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, '__sleep', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;

        return array('valueHolderadbba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer681a9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer681a9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer681a9 && ($this->initializer681a9->__invoke($valueHolderadbba, $this, 'initializeProxy', array(), $this->initializer681a9) || 1) && $this->valueHolderadbba = $valueHolderadbba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderadbba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderadbba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
