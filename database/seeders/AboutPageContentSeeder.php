<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutPageContent;

class AboutPageContentSeeder extends Seeder
{
    public function run(): void
    {
        // پاک‌سازی قبلی
        AboutPageContent::truncate();

        // بلوک اول: معرفی اصلی
        AboutPageContent::create([
            'type' => 'block',
            'title' => 'Trusted Tax Professionals for Small Businesses',
            'text_content' => 'At Flite Tax Advisory and Preparation LLC, we specialize in comprehensive small business tax services. Our mission is to help you stay compliant, reduce your tax liability, and plan ahead for future changes in tax laws.',
        ]);

        // بلوک دوم: درباره ما
        AboutPageContent::create([
            'type' => 'block',
            'title' => 'Who We Are',
            'text_content' => 'With over 15 years of experience, our team of enrolled agents and tax advisors are committed to delivering personalized, accurate, and proactive services to entrepreneurs, freelancers, and small business owners across the United States.',
        ]);

        // لیست خدمات کلیدی
        AboutPageContent::create([
            'type' => 'list',
            'title' => 'What Sets Us Apart',
            'list_content' => [
                ['item' => 'Accurate tax return filing (Forms 1120, 1120S, 1065, Schedule C, & more)'],
                ['item' => 'Year-round tax planning and compliance guidance'],
                ['item' => 'Income & expense categorization to optimize deductions'],
                ['item' => 'Maximizing deductions for home offices, mileage, meals, and more'],
                ['item' => 'E-filing services with IRS confirmation tracking'],
                ['item' => 'Quarterly estimated tax payment assistance'],
                ['item' => 'Multi-state business filing expertise'],
            ],
        ]);

        // بلوک درباره‌ی رویکرد شخصی
        AboutPageContent::create([
            'type' => 'block',
            'title' => 'Our Approach',
            'text_content' => 'We go beyond tax preparation. Our firm helps clients plan, protect, and prosper by understanding their unique needs and creating a tax strategy that fits their business goals.',
        ]);

        // لیست ویژگی‌های ما
        AboutPageContent::create([
            'type' => 'list',
            'title' => 'Why Clients Trust Us',
            'list_content' => [
                ['item' => 'Licensed Enrolled Agents with IRS authority'],
                ['item' => 'Flat-fee pricing with no hidden charges'],
                ['item' => 'Bilingual support (English & Spanish)'],
                ['item' => 'Remote & in-person consultation options'],
                ['item' => '100% confidentiality and data protection'],
                ['item' => 'Fast response times and reliable support'],
            ],
        ]);

        // بلوک پایانی: دعوت به همکاری
        AboutPageContent::create([
            'type' => 'block',
            'title' => 'Let’s Work Together',
            'text_content' => 'Whether you are launching a new business or managing a growing operation, Flite Tax Advisory is ready to support your journey with expert tax advice and strategic financial insights.',
        ]);
    }
}
