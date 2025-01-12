<?php

namespace App\Enums;

enum PageType: int
{
    case HOME = 1;
    case ABOUT_US_WHY_CHOOSE_US = 2;
    case ABOUT_US_OUR_CLUTURE = 3;
    case ABOUT_US_LEADER_SHIP_TEAM = 4;
    case CAREERS = 5;
    case INSIGHTS = 6;
    case CONTACT_US = 7;

    /**
     * Get a human-readable label for each page type.
     */
    public function label(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::ABOUT_US_WHY_CHOOSE_US => 'About Us: why choose us',
            self::ABOUT_US_OUR_CLUTURE => 'About Us: our cluture',
            self::ABOUT_US_LEADER_SHIP_TEAM => 'About Us: leader ship team',
            self::CAREERS => 'Careers',
            self::INSIGHTS => 'Insights',
            self::CONTACT_US => 'Contact Us',
        };
    }

    /**
     * Get all labels as an array.
     */
    public static function getLabels(): array
    {
        return array_map(fn($case) => $case->label(), self::cases());
    }

    /**
     * Get all enum values.
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Get an enum instance by its label.
     */
    public static function fromLabel(string $label): ?self
    {
        return match ($label) {
            'Home' => self::HOME,
            'About Us: why choose us' => self::ABOUT_US_WHY_CHOOSE_US,
            'About Us: our cluture' => self::ABOUT_US_OUR_CLUTURE,
            'About Us: leader ship team' => self::ABOUT_US_LEADER_SHIP_TEAM,
            'Careers' => self::CAREERS,
            'Insights' => self::INSIGHTS,
            'Contact Us' => self::CONTACT_US,
            default => null,
        };
    }

    /**
     * Get the label for a given case number.
     */
    public static function labelByValue(int $value): ?string
    {
        $case = self::tryFrom($value); // Get the enum instance from the value
        return $case?->label(); // Return the label or null if not found
    }
    /**
    //  * Get sections associated with the page.
    //  */
    // public function sections(): array
    // {
    //     return match ($this) {
    //         self::HOME => [SectionType::FIRST_SECTION, SectionType::SECOND_SECTION],
    //         self::ABOUT_US => [SectionType::FIRST_SECTION, SectionType::THIRD_SECTION],
    //         self::CAREERS => [SectionType::SECOND_SECTION, SectionType::THIRD_SECTION],
    //         self::INSIGHTS => [SectionType::FIRST_SECTION, SectionType::SECOND_SECTION, SectionType::THIRD_SECTION],
    //         self::CONTACT_US => [SectionType::FIRST_SECTION],
    //     };
    // }
}
