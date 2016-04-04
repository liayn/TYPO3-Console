<?php
namespace Helhum\Typo3Console\Parser;

/*
 * This file is part of the typo3 console project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 */

/**
 * Interface PhpParserInterface
 */
interface PhpParserInterface
{
    /**
     * @param string $classFile Path to PHP class file
     * @return ParsedClass
     * @throws ParsingException
     */
    public function parseClassFile($classFile);

    /**
     * @param string $classContent
     * @return ParsedClass
     */
    public function parseClass($classContent);
}
