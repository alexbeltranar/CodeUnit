<?php
/**
* Copyright © 2015 Alex Beltran. All rights reserved.
*/
/*
	Registramos el nuevo Modulo en magento
*/
\Magento\Framework\Component\ComponentRegistrar::register(
 \Magento\Framework\Component\ComponentRegistrar::MODULE,
 'CodeUnit_ConsoleDemo',
 __DIR__
);
