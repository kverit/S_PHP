<?php

namespace ContainerVtA7Pkg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1bfbe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer88d65 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesee8af = [
        
    ];

    public function getConnection()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getConnection', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getMetadataFactory', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getExpressionBuilder', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'beginTransaction', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getCache', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'transactional', array('func' => $func), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'commit', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->commit();
    }

    public function rollback()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'rollback', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getClassMetadata', array('className' => $className), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'createQuery', array('dql' => $dql), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'createNamedQuery', array('name' => $name), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'createQueryBuilder', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'flush', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'clear', array('entityName' => $entityName), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->clear($entityName);
    }

    public function close()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'close', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->close();
    }

    public function persist($entity)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'persist', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'remove', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'refresh', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'detach', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'merge', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'contains', array('entity' => $entity), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getEventManager', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getConfiguration', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'isOpen', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getUnitOfWork', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getProxyFactory', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'initializeObject', array('obj' => $obj), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'getFilters', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'isFiltersStateClean', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'hasFilters', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return $this->valueHolder1bfbe->hasFilters();
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

        $instance->initializer88d65 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1bfbe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1bfbe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1bfbe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, '__get', ['name' => $name], $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        if (isset(self::$publicPropertiesee8af[$name])) {
            return $this->valueHolder1bfbe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bfbe;

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

        $targetObject = $this->valueHolder1bfbe;
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
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bfbe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1bfbe;
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
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, '__isset', array('name' => $name), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bfbe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1bfbe;
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
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, '__unset', array('name' => $name), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1bfbe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1bfbe;
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
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, '__clone', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        $this->valueHolder1bfbe = clone $this->valueHolder1bfbe;
    }

    public function __sleep()
    {
        $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, '__sleep', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;

        return array('valueHolder1bfbe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer88d65 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer88d65;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer88d65 && ($this->initializer88d65->__invoke($valueHolder1bfbe, $this, 'initializeProxy', array(), $this->initializer88d65) || 1) && $this->valueHolder1bfbe = $valueHolder1bfbe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1bfbe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1bfbe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
