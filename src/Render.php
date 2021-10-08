<?php
declare(strict_types=1);

namespace CatLovers;

final class Render
{
    /**
     * @param array<string,mixed> $context
     */
    public static function view(string $template, array $context = []): string
    {
        ob_start();

        extract($context);
        include $template;

        $contents = ob_get_contents();

        ob_end_clean();

        return $contents ?: '';
    }
}
