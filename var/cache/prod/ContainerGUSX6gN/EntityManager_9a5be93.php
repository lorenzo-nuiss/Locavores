<?php

namespace ContainerGUSX6gN;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb0527 = null;
    private $initializerca387 = null;
    private static $publicPropertiese6427 = [
        
    ];
    public function getConnection()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getConnection', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getMetadataFactory', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getExpressionBuilder', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'beginTransaction', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getCache', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getCache();
    }
    public function transactional($func)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'transactional', array('func' => $func), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'commit', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->commit();
    }
    public function rollback()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'rollback', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getClassMetadata', array('className' => $className), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'createQuery', array('dql' => $dql), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'createNamedQuery', array('name' => $name), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'createQueryBuilder', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'flush', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'clear', array('entityName' => $entityName), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->clear($entityName);
    }
    public function close()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'close', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->close();
    }
    public function persist($entity)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'persist', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'remove', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'refresh', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'detach', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'merge', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'contains', array('entity' => $entity), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getEventManager', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getConfiguration', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'isOpen', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getUnitOfWork', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getProxyFactory', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'initializeObject', array('obj' => $obj), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'getFilters', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'isFiltersStateClean', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'hasFilters', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return $this->valueHolderb0527->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerca387 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb0527) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb0527 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb0527->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, '__get', ['name' => $name], $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        if (isset(self::$publicPropertiese6427[$name])) {
            return $this->valueHolderb0527->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0527;
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
        $targetObject = $this->valueHolderb0527;
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
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0527;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb0527;
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
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, '__isset', array('name' => $name), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0527;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb0527;
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
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, '__unset', array('name' => $name), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0527;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb0527;
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
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, '__clone', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        $this->valueHolderb0527 = clone $this->valueHolderb0527;
    }
    public function __sleep()
    {
        $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, '__sleep', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
        return array('valueHolderb0527');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca387 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca387;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerca387 && ($this->initializerca387->__invoke($valueHolderb0527, $this, 'initializeProxy', array(), $this->initializerca387) || 1) && $this->valueHolderb0527 = $valueHolderb0527;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb0527;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb0527;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
