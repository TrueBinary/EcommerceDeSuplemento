<?php

namespace ContainerR1bvyIq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a8e3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd87ae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9b9d1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getConnection', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getMetadataFactory', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getExpressionBuilder', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'beginTransaction', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getCache', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'transactional', array('func' => $func), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->transactional($func);
    }

    public function commit()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'commit', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->commit();
    }

    public function rollback()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'rollback', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getClassMetadata', array('className' => $className), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'createQuery', array('dql' => $dql), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'createNamedQuery', array('name' => $name), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'createQueryBuilder', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'flush', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'clear', array('entityName' => $entityName), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->clear($entityName);
    }

    public function close()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'close', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->close();
    }

    public function persist($entity)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'persist', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'remove', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'refresh', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'detach', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'merge', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'contains', array('entity' => $entity), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getEventManager', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getConfiguration', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'isOpen', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getUnitOfWork', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getProxyFactory', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'initializeObject', array('obj' => $obj), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'getFilters', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'isFiltersStateClean', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'hasFilters', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return $this->valueHolder5a8e3->hasFilters();
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

        $instance->initializerd87ae = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a8e3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a8e3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a8e3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, '__get', ['name' => $name], $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        if (isset(self::$publicProperties9b9d1[$name])) {
            return $this->valueHolder5a8e3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a8e3;

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

        $targetObject = $this->valueHolder5a8e3;
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
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a8e3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a8e3;
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
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, '__isset', array('name' => $name), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a8e3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a8e3;
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
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, '__unset', array('name' => $name), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a8e3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a8e3;
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
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, '__clone', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        $this->valueHolder5a8e3 = clone $this->valueHolder5a8e3;
    }

    public function __sleep()
    {
        $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, '__sleep', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;

        return array('valueHolder5a8e3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd87ae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd87ae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd87ae && ($this->initializerd87ae->__invoke($valueHolder5a8e3, $this, 'initializeProxy', array(), $this->initializerd87ae) || 1) && $this->valueHolder5a8e3 = $valueHolder5a8e3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a8e3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a8e3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
