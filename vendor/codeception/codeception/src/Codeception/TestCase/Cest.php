<?php
namespace Codeception\TestCase;

use Codeception\Event\Test as TestEvent;
use Codeception\Util\Annotation;

class Cest extends Cept
{
    protected $testClassInstance = null;
    protected $testMethod = null;
    protected $guy;

    public function __construct($dispatcher, array $data = array(), $dataName = '') {
        parent::__construct($dispatcher, $data, $dataName);
        $this->testClassInstance = $data['instance'];
        $this->testMethod = $data['method'];
        $this->guy = $data['guy'];
    }

    public function preload()
    {
        if (file_exists($this->bootstrap)) require $this->bootstrap;
        $I = $this->makeIObject();
        $this->executeTestMethod($I);
        $this->fire('test.parsed', new TestEvent($this));
    }

    public function testCodecept() {
        $this->fire('test.before', new TestEvent($this));
        if (file_exists($this->bootstrap)) require $this->bootstrap;

        $this->scenario->run();
        $I = $this->makeIObject();

        try {
            $this->executeBefore($this->testMethod, $I);
            $this->executeTestMethod($I);
        } catch (\Exception $e) {
            $this->executeAfter($this->testMethod, $I);
            // fails and errors are now handled by Codeception\PHPUnit\Listener
            throw $e;
        }
        $this->executeAfter($this->testMethod, $I);
        $this->fire('test.after', new TestEvent($this));
    }

    protected function executeBefore($testMethod, $I)
    {
        $before = Annotation::forClass($this->testClassInstance)->method($testMethod)->fetch('before');
        if (!$before) return;
        $this->executeContextMethod($before, $I);
    }

    protected function executeAfter($testMethod, $I)
    {
        $after = Annotation::forClass($this->testClassInstance)->method($testMethod)->fetch('after');
        if (!$after) return;
        $this->executeContextMethod($after, $I);
    }

    protected function executeContextMethod($context, $I)
    {
        if (method_exists($this->testClassInstance, $context)) {
            $this->executeBefore($context, $I);
            $contextMethod = new \ReflectionMethod($this->testClassInstance, $context);
            $contextMethod->setAccessible(true);
            $contextMethod->invoke($this->testClassInstance, $I);
            $this->executeAfter($context, $I);
            return;
        }
        throw new \Exception("Method $context defined in annotation but does not exists in ".get_class($this->testClassInstance));

    }


    protected function makeIObject()
    {
        $class_name = '\\'.$this->guy;
        $I = new $class_name($this->scenario);

        if ($spec = $this->getSpecFromMethod()) {
            $I->wantTo($spec);
        }
        return $I;
    }

    protected function executeTestMethod($I)
    {
        $testMethodSignature = array($this->testClassInstance, $this->testMethod);
        if (!is_callable($testMethodSignature)) throw new \Exception("Method {$this->testMethod} can't be found in tested class");
        call_user_func($testMethodSignature, $I, $this->scenario);
    }

    public function getTestClass()
    {
        return $this->testClassInstance;
    }

    public function getTestMethod()
    {
        return $this->testMethod;
    }

    public function getSpecFromMethod() {
        $text = $this->testMethod;
        $text = preg_replace('/([A-Z]+)([A-Z][a-z])/', '\\1 \\2', $text);
        $text = preg_replace('/([a-z\d])([A-Z])/', '\\1 \\2', $text);
        $text = strtolower($text);
        return $text;
    }

    public function getFileName() {
        $class = str_replace('\\','.',get_class($this->getTestClass()));
        return $class.".".$this->getTestMethod();
    }

}
