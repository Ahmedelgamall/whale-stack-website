<?php

namespace App\Enums;

enum SectionType: int
{
    case FIRST_SECTION = 1;
    case SECOND_SECTION = 2;
    case THIRD_SECTION = 3;

    /**
     * Get a human-readable label for the section.
     */
    public function label(): string
    {
        return match ($this) {
            self::FIRST_SECTION => 'First Section',
            self::SECOND_SECTION => 'Second Section',
            self::THIRD_SECTION => 'Third Section',
        };
    }

    /**
     * Get an array of all section names.
     */
    public static function getNames(): array
    {
        return array_map(fn($section) => $section->label(), self::cases());
    }

    /**
     * Get an array of all section values.
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Create an enum instance from a name.
     */
    public static function fromName(string $name): ?self
    {
        return match ($name) {
            'First Section' => self::FIRST_SECTION,
            'Second Section' => self::SECOND_SECTION,
            'Third Section' => self::THIRD_SECTION,
            default => null,
        };
    }
    
}
