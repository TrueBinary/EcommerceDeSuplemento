<?php

namespace Container8uzXfVl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0364 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7ecdd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf379c = [
        
    ];

    public function getConnection()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getConnection', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getMetadataFactory', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getExpressionBuilder', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'beginTransaction', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getCache', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'transactional', array('func' => $func), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->transactional($func);
    }

    public function commit()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'commit', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->commit();
    }

    public function rollback()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'rollback', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getClassMetadata', array('className' => $className), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'createQuery', array('dql' => $dql), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'createNamedQuery', array('name' => $name), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'createQueryBuilder', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'flush', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'clear', array('entityName' => $entityName), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->clear($entityName);
    }

    public function close()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'close', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->close();
    }

    public function persist($entity)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'persist', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'remove', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'refresh', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'detach', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'merge', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'contains', array('entity' => $entity), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getEventManager', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getConfiguration', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'isOpen', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getUnitOfWork', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getProxyFactory', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'initializeObject', array('obj' => $obj), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'getFilters', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'isFiltersStateClean', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'hasFilters', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return $this->valueHolderf0364->hasFilters();
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

        $instance->initializer7ecdd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0364) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0364 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0364->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, '__get', ['name' => $name], $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        if (isset(self::$publicPropertiesf379c[$name])) {
            return $this->valueHolderf0364->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0364;

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

        $targetObject = $this->valueHolderf0364;
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
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0364;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0364;
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
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, '__isset', array('name' => $name), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0364;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0364;
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
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, '__unset', array('name' => $name), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0364;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0364;
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
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, '__clone', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        $this->valueHolderf0364 = clone $this->valueHolderf0364;
    }

    public function __sleep()
    {
        $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, '__sleep', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;

        return array('valueHolderf0364');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7ecdd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7ecdd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7ecdd && ($this->initializer7ecdd->__invoke($valueHolderf0364, $this, 'initializeProxy', array(), $this->initializer7ecdd) || 1) && $this->valueHolderf0364 = $valueHolderf0364;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0364;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0364;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
