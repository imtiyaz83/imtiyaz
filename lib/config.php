<?php
    $hostName = $_SERVER['HTTP_HOST'];
    define('HOST_NAME', $hostName);

    $services = array(
        'WDMP-001' => 'Web Development Mastery Program (WDMP-001)',
        'SDMP-002' => 'System Design Mastery Program (SDMP-002)',
        'DMP-003' => 'DevOps Mastery Program (DMP003)',
        'C@C-004' => 'College-to-Corporate Program (C@C-004)',
        'SSP-005' => 'Startup Success Program (SSP-005)',
        'EP-006' => 'Entrepreneurship Program (EP-006)',
        'MCGDP-007' => 'Mid-career Growth & Development Program (MCGDP-007)',
        'UMUPDP-008' => 'Unstoppable Mindest & Unbreakable Personality Development Program (UMUPDP-008)',
        'CSGCP-009' => 'Career Switch, Growth & Counselling Program (CSGCP-009)',
        'NOT-FOUND' => 'Anything Else...',
    );
    
    define('SERVICES', $services);
    define('EBOOK_DOWNLOAD_PATH', 'http://imtiyaazkhan.com/ebooks/');

?>