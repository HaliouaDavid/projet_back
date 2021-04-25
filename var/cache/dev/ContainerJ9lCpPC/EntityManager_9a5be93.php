<?php

namespace ContainerJ9lCpPC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder23ff6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera9b13 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa8cd1 = [
        
    ];

    public function getConnection()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getConnection', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getMetadataFactory', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getExpressionBuilder', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'beginTransaction', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getCache', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getCache();
    }

    public function transactional($func)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'transactional', array('func' => $func), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->transactional($func);
    }

    public function commit()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'commit', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->commit();
    }

    public function rollback()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'rollback', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getClassMetadata', array('className' => $className), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'createQuery', array('dql' => $dql), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'createNamedQuery', array('name' => $name), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'createQueryBuilder', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'flush', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'clear', array('entityName' => $entityName), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->clear($entityName);
    }

    public function close()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'close', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->close();
    }

    public function persist($entity)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'persist', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'remove', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'refresh', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'detach', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'merge', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getRepository', array('entityName' => $entityName), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'contains', array('entity' => $entity), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getEventManager', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getConfiguration', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'isOpen', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getUnitOfWork', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getProxyFactory', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'initializeObject', array('obj' => $obj), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'getFilters', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'isFiltersStateClean', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'hasFilters', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return $this->valueHolder23ff6->hasFilters();
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

        $instance->initializera9b13 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder23ff6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23ff6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder23ff6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, '__get', ['name' => $name], $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        if (isset(self::$publicPropertiesa8cd1[$name])) {
            return $this->valueHolder23ff6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23ff6;

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

        $targetObject = $this->valueHolder23ff6;
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
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23ff6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23ff6;
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
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, '__isset', array('name' => $name), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23ff6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder23ff6;
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
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, '__unset', array('name' => $name), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23ff6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder23ff6;
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
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, '__clone', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        $this->valueHolder23ff6 = clone $this->valueHolder23ff6;
    }

    public function __sleep()
    {
        $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, '__sleep', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;

        return array('valueHolder23ff6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera9b13 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera9b13;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera9b13 && ($this->initializera9b13->__invoke($valueHolder23ff6, $this, 'initializeProxy', array(), $this->initializera9b13) || 1) && $this->valueHolder23ff6 = $valueHolder23ff6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23ff6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23ff6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
