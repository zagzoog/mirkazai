<?php

namespace Database\Seeders;

use App\Models\SocialMediaAccounts;
use Illuminate\Database\Seeder;

class SocialAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAllSocials();
    }

    private function createAllSocials(): void
    {
        $socials = [
            [
                'title'    => 'Linkedin',
                'subtitle' => 'Developments in the sector',
                'key'      => 'linkedin',
                'link'     => '#',
                'icon'     => '<svg width="50" height="52" viewBox="0 0 50 52" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M42.4358 43.9153H35.1192V32.1428C35.1192 29.3353 35.0705 25.7228 31.3137 25.7228C27.5033 25.7228 26.9193 28.7803 26.9193 31.9403V43.9153H19.6051V19.7053H26.6297V23.0128H26.7271C28.1602 20.4978 30.8221 18.9953 33.6568 19.1028C41.0732 19.1028 42.4383 24.1153 42.4383 30.6328L42.4358 43.9153ZM11.3492 16.3953C9.00359 16.3953 7.10326 14.4428 7.10326 12.0328C7.10326 9.62284 9.00359 7.67034 11.3492 7.67034C13.6948 7.67034 15.5951 9.62284 15.5951 12.0328C15.5951 14.4428 13.6948 16.3953 11.3492 16.3953ZM15.0063 43.9153H7.68236V19.7053H15.0063V43.9153ZM46.0832 0.690341H4.00579C2.01786 0.667841 0.387613 2.30534 0.363281 4.34784V47.7578C0.387613 49.8028 2.01786 51.4403 4.00579 51.4178H46.0832C48.076 51.4428 49.7136 49.8053 49.7403 47.7578V4.34534C49.7111 2.29784 48.0736 0.660341 46.0832 0.687841" /> </svg>',
            ],
            [
                'title'    => 'Telegram',
                'subtitle' => 'Fast instant communication',
                'key'      => 'telegram',
                'link'     => '#',
                'icon'     => '<svg width="54" height="44" viewBox="0 0 54 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M1.90766 21.6842L13.9835 25.7855L42.6529 8.25838C43.0684 8.0042 43.4942 8.56864 43.1358 8.89856L21.431 28.8769L20.6238 40.0616C20.5623 40.9125 21.5873 41.3862 22.1955 40.7881L28.8784 34.2166L41.0954 43.4649C42.4122 44.4619 44.319 43.7592 44.6743 42.1462L53.181 3.52121C53.6662 1.31777 51.5072 -0.541559 49.4001 0.265366L1.84622 18.475C0.35447 19.0463 0.395102 21.1706 1.90766 21.6842Z" /> </svg>',
            ],
            [
                'title'    => 'Behance',
                'subtitle' => 'A wide visibility',
                'key'      => 'behance',
                'link'     => '#',
                'icon'     => '<svg width="54" height="34" viewBox="0 0 54 34" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M27.5018 23.0206V20.9609C27.5018 17.6598 24.8344 15.019 21.5598 15.019L22.8538 14.121C24.9665 12.695 26.234 10.2918 26.234 7.75669C26.234 5.69675 25.4155 3.84808 24.0686 2.52765C22.7481 1.18091 20.8996 0.362305 18.8397 0.362305H0.75V32.8446H17.6778C23.0914 32.8447 27.5018 28.4343 27.5018 23.0206ZM7.64256 5.74963H16.014C18.074 5.74963 19.7377 7.41337 19.7377 9.47308C19.7377 11.533 18.074 13.1968 16.014 13.1968H7.64256V5.74963ZM7.64256 27.6422V18.3201H16.3574C18.9454 18.3201 21.0317 20.4062 21.0317 22.968C21.0317 25.5559 18.9454 27.6422 16.3574 27.6422H7.64256Z" /> <path d="M41.2872 8.5752C34.6851 8.5752 29.3242 14.1738 29.3242 21.0928C29.3242 28.0117 34.6851 33.6369 41.2872 33.6369C46.4368 33.6369 50.847 30.2038 52.5107 25.3973H46.7273C45.3278 28.8833 41.2872 28.3023 41.2872 28.3023C35.6886 27.8798 35.8999 22.5188 35.8999 22.5188H53.171C53.2238 22.0434 53.2503 21.5681 53.2503 21.0927C53.2503 14.1738 47.8893 8.5752 41.2872 8.5752ZM36.4017 18.3199C36.4017 15.4942 38.6992 13.1967 41.5249 13.1967C44.3769 13.1967 46.6746 15.4942 46.6746 18.3199H36.4017Z" /> <path d="M34.7812 2.5625H48.2213V5.74625H34.7812V2.5625Z" /> </svg>',
            ],
            [
                'title'    => 'X',
                'subtitle' => 'Latest news and updates',
                'key'      => 'twitter',
                'link'     => '#',
                'icon'     => '<svg id="Capa_1" enable-background="new 0 0 1226.37 1226.37" viewBox="0 0 1226.37 1226.37" xmlns="http://www.w3.org/2000/svg"><path d="m727.348 519.284 446.727-519.284h-105.86l-387.893 450.887-309.809-450.887h-357.328l468.492 681.821-468.492 544.549h105.866l409.625-476.152 327.181 476.152h357.328l-485.863-707.086zm-144.998 168.544-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721h-162.604l-323.311-462.446z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>',
            ],
            [
                'title'    => 'Instagram',
                'subtitle' => 'Share your photos',
                'key'      => 'instagram',
                'link'     => '#',
                'icon'     => '<svg height="511pt" viewBox="0 0 511 511.9" width="511pt" xmlns="http://www.w3.org/2000/svg"><path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/></svg>',
            ],
            [
                'title'    => 'Facebook',
                'subtitle' => 'The most popular social media',
                'key'      => 'facebook',
                'link'     => '#',
                'icon'     => '<svg width="54" height="54" viewBox="0 0 54 54" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M27 0C12.087 0 0 12.087 0 27C0 40.5 10.5 51 24 54V35.1H17.1V27H24V21.6C24 16.2 27.9 13.5 32.4 13.5C34.2 13.5 36 13.8 36 13.8V20.7H33.3C30.6 20.7 30 22.5 30 24V27H36L35.1 35.1H30V54C43.5 51 54 40.5 54 27C54 12.087 41.913 0 27 0Z" /> </svg>',
            ],
        ];

        foreach ($socials as $social) {
            $this->createSocial(...$social);
        }
    }

    private function createSocial(string $title, string $subtitle, string $key, string $link, string $icon): void
    {
        SocialMediaAccounts::query()
            ->firstOrCreate([
                'key' => $key,
            ], [
                'title'     => $title,
                'subtitle'  => $subtitle,
                'key'       => $key,
                'link'      => $link,
                'icon'      => $icon,
                'is_active' => true,
            ]);
    }
}
