<?php
namespace PackageToshi;
/**
 *
 */
class TransformText
{
    function __construct($text)
    {
        $this->setUpperText($text);
    }
    private function getUpperText($text)
    {
        return $text;
    }
    public function setUpperText($text)
    {
        $newText = $this->getUpperText($text);
        return strtoupper($newText);
    }
}
?>
