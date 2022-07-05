<?php

namespace ContainerXChCNxs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldered173 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9f2aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2edc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getConnection', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getMetadataFactory', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getExpressionBuilder', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'beginTransaction', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getCache', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'transactional', array('func' => $func), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'commit', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->commit();
    }

    public function rollback()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'rollback', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getClassMetadata', array('className' => $className), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'createQuery', array('dql' => $dql), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'createNamedQuery', array('name' => $name), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'createQueryBuilder', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'flush', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'clear', array('entityName' => $entityName), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->clear($entityName);
    }

    public function close()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'close', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->close();
    }

    public function persist($entity)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'persist', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'remove', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'refresh', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'detach', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'merge', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'contains', array('entity' => $entity), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getEventManager', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getConfiguration', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'isOpen', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getUnitOfWork', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getProxyFactory', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'initializeObject', array('obj' => $obj), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'getFilters', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'isFiltersStateClean', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'hasFilters', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return $this->valueHoldered173->hasFilters();
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

        $instance->initializer9f2aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldered173) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldered173 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldered173->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, '__get', ['name' => $name], $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        if (isset(self::$publicProperties2edc7[$name])) {
            return $this->valueHoldered173->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered173;

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

        $targetObject = $this->valueHoldered173;
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
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered173;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldered173;
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
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, '__isset', array('name' => $name), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered173;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldered173;
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
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, '__unset', array('name' => $name), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldered173;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldered173;
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
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, '__clone', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        $this->valueHoldered173 = clone $this->valueHoldered173;
    }

    public function __sleep()
    {
        $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, '__sleep', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;

        return array('valueHoldered173');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9f2aa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9f2aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9f2aa && ($this->initializer9f2aa->__invoke($valueHoldered173, $this, 'initializeProxy', array(), $this->initializer9f2aa) || 1) && $this->valueHoldered173 = $valueHoldered173;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldered173;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldered173;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
