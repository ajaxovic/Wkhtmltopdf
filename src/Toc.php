<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2011 Ladislav Marek <ladislav@marek.su>
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Kdyby\Wkhtmltopdf;

use Kdyby;
use Nette;


/**
 * @author Ladislav Marek <ladislav@marek.su>
 */
class Toc implements Kdyby\Wkhtmltopdf\IDocumentPart
{
	use Nette\SmartObject;

	/** @var string */
	public $header = 'Table of contents';

	/** @var float */
	public $headersSizeShrink = 0.9;

	/** @var string */
	public $indentationLevel = '1em';


	/**
	 * @param Kdyby\Wkhtmltopdf\Document
	 * @return string
	 */
	public function buildShellArgs(Document $document): string
	{
		return ' toc --toc-header-text ' . escapeshellarg($this->header)
			. ' --toc-level-indentation ' . escapeshellarg($this->indentationLevel)
			. ' --toc-text-size-shrink ' . number_format($this->headersSizeShrink, 4, '.', '');
	}
}
