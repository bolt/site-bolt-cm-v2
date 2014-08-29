<?php
/**
 * This file is part of PHP_PMD.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2012, Manuel Pichler <mapi@phpmd.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Regression
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2008-2012 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    SVN: $Id$
 * @link       https://www.pivotaltracker.com/story/show/24975295
 * @since      1.3.1
 */

require_once dirname(__FILE__) . '/AbstractTest.php';

require_once 'PHP/PMD.php';
require_once 'PHP/PMD/RuleSetFactory.php';
require_once 'PHP/PMD/Renderer/TextRenderer.php';
require_once 'PHP/PMD/Writer/Stream.php';

/**
 * Regression test for issue 14990109.
 *
 * @category   PHP
 * @package    PHP_PMD
 * @subpackage Regression
 * @author     Manuel Pichler <mapi@phpmd.org>
 * @copyright  2008-2012 Manuel Pichler. All rights reserved.
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       https://www.pivotaltracker.com/story/show/24975295
 * @since      1.3.1
 *
 * @ticket 24975295
 * @covers stdClass
 * @group phpmd
 * @group phpmd::regression
 * @group regressiontest
 */
class PHP_PMD_Regression_MaximumNestingLevelTicket24975295Test
    extends PHP_PMD_Regression_AbstractTest
{
    /**
     * testLocalVariableUsedInDoubleQuoteStringGetsNotReported
     *
     * @return void
     * @outputBuffering enabled
     */
    public function testLocalVariableUsedInDoubleQuoteStringGetsNotReported()
    {
        $renderer = new PHP_PMD_Renderer_TextRenderer();
        $renderer->setWriter(new PHP_PMD_Writer_Stream(self::createTempFileUri()));

        $inputs   = self::createCodeResourceUriForTest();
        $rules    = 'unusedcode';
        $renderes = array($renderer);
        $factory  = new PHP_PMD_RuleSetFactory();

        $phpmd = new PHP_PMD();
        $phpmd->processFiles($inputs, $rules, $renderes, $factory);
    }
}
