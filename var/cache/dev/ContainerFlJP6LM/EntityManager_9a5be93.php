<?php

namespace ContainerFlJP6LM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdba9f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdbac7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties64e12 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getConnection', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getMetadataFactory', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getExpressionBuilder', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'beginTransaction', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getCache', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'transactional', array('func' => $func), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->transactional($func);
    }

    public function commit()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'commit', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->commit();
    }

    public function rollback()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'rollback', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getClassMetadata', array('className' => $className), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'createQuery', array('dql' => $dql), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'createNamedQuery', array('name' => $name), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'createQueryBuilder', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'flush', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'clear', array('entityName' => $entityName), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->clear($entityName);
    }

    public function close()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'close', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->close();
    }

    public function persist($entity)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'persist', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'remove', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'refresh', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'detach', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'merge', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'contains', array('entity' => $entity), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getEventManager', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getConfiguration', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'isOpen', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getUnitOfWork', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getProxyFactory', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'initializeObject', array('obj' => $obj), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'getFilters', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'isFiltersStateClean', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'hasFilters', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return $this->valueHolderdba9f->hasFilters();
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

        $instance->initializerdbac7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdba9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdba9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdba9f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, '__get', ['name' => $name], $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        if (isset(self::$publicProperties64e12[$name])) {
            return $this->valueHolderdba9f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba9f;

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

        $targetObject = $this->valueHolderdba9f;
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
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba9f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdba9f;
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
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, '__isset', array('name' => $name), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba9f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdba9f;
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
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, '__unset', array('name' => $name), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba9f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdba9f;
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
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, '__clone', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        $this->valueHolderdba9f = clone $this->valueHolderdba9f;
    }

    public function __sleep()
    {
        $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, '__sleep', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;

        return array('valueHolderdba9f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdbac7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdbac7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdbac7 && ($this->initializerdbac7->__invoke($valueHolderdba9f, $this, 'initializeProxy', array(), $this->initializerdbac7) || 1) && $this->valueHolderdba9f = $valueHolderdba9f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdba9f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdba9f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
