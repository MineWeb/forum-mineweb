<?php
Router::connect('/forum', ['controller' => 'forum', 'action' => 'index', 'plugin' => 'forum']);
Router::connect('/forum/:slug.:id', ['controller' => 'forum', 'action' => 'forum', 'plugin' => 'forum'], ['pass' => ['id', 'slug'], 'id' => '[0-9]+']);
Router::connect('/topic/:slug.:id', ['controller' => 'forum', 'action' => 'topic', 'plugin' => 'forum'], ['pass' => ['id', 'slug'], 'id' => '[0-9]+']);
Router::connect('/user/:slug.:id', ['controller' => 'user', 'action' => 'index', 'plugin' => 'forum'], ['pass' => ['id', 'slug'], 'id' => '[0-9]+']);
Router::connect('/user/:slug.:id/edit', ['controller' => 'user', 'action' => 'edit', 'plugin' => 'forum'], ['pass' => ['id', 'slug'], 'id' => '[0-9]+']);
Router::connect('/topic/add/:id', ['controller' => 'forum', 'action' => 'addTopic', 'plugin' => 'forum'], ['pass' => ['id'], 'id' => '[0-9]+']);
Router::connect('/forum/report', ['controller' => 'forum', 'action' => 'report', 'plugin' => 'forum']);
Router::connect('/forum/debug', ['controller' => 'forum', 'action' => 'debug', 'plugin' => 'forum']);
Router::connect('/forum/banned', ['controller' => 'forum', 'action' => 'banned', 'plugin' => 'forum']);
Router::connect('/message', ['controller' => 'message', 'action' => 'index', 'plugin' => 'forum']);
Router::connect('/message/new', ['controller' => 'message', 'action' => 'newMessage', 'plugin' => 'forum']);
Router::connect('/message/:slug.:id', ['controller' => 'message', 'action' => 'view', 'plugin' => 'forum'], ['pass' => ['id', 'slug'], 'id' => '[0-9]+']);
