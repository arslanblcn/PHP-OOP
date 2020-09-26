<?php
	class poemFile
	{
		public function __destruct()
		{
			file_put_contents($this->filename, $this->poemName, FILE_APPEND);
		}
	}

	class Poem
	{
		public $poemName;
		public $isPoetrist;
		public $poemLines;

		public function printData()
		{
			if($this->isPoetrist){
				echo $this->poemName . "\n";
				echo $this->poemLines . "\n";
				echo "\n Poem has been added!";
			} else {
				echo $this->poemName ." is not a poem\n";
			}
		}
	}
	$object = unserialize(urldecode($_REQUEST['data']));
	$object->printData();
?>
