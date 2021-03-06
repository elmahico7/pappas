<?php
namespace MailPoetVendor\Twig\Node\Expression\Binary;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Compiler;
class FloorDivBinary extends AbstractBinary
{
 public function compile(Compiler $compiler)
 {
 $compiler->raw('(int) floor(');
 parent::compile($compiler);
 $compiler->raw(')');
 }
 public function operator(Compiler $compiler)
 {
 return $compiler->raw('/');
 }
}
\class_alias('MailPoetVendor\\Twig\\Node\\Expression\\Binary\\FloorDivBinary', 'MailPoetVendor\\Twig_Node_Expression_Binary_FloorDiv');
