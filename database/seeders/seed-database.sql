USE
`ya_php_demo_2025_s2`;

TRUNCATE `ya_php_demo_2025_s2`.`categories`;

INSERT INTO `ya_php_demo_2025_s2`.`categories`(`id`, `title`, `description`)
    VALUE (1, 'Unknown', 'Unknown category');

INSERT INTO `ya_php_demo_2025_s2`.`categories`(`id`, `title`, `description`)
    VALUE (100, 'Pirate', 'Arrrrgggh, we pirates arrrrre very funny');

INSERT INTO `ya_php_demo_2025_s2`.`categories`(`title`, `description`)
VALUES ('Dad', 'The worst, always the worst'),
       ('Mum', 'Mum\'s the best'),
       ('Maths', 'Some very calculated punch lines'),
       ('Lightbulb', 'There is a switch somewhere...');
