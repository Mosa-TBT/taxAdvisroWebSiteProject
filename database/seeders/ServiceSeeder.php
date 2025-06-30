<?php

namespace Database\Seeders;


// database/seeders/ServiceSeeder.php
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Comprehensive Tax Planning',
                'description' => 'We provide in-depth tax planning strategies tailored to the unique structure and goals of your business. Our experts analyze your income streams, expenses, investments, and long-term objectives to create a tax roadmap that reduces liabilities and increases savings. We ensure that you stay ahead of ever-changing tax laws and take advantage of all applicable deductions and credits, allowing you to focus on growth while we handle the complexity of compliance.'
            ],
            [
                'title' => 'Corporate Tax Return Filing',
                'description' => 'Filing corporate tax returns can be time-consuming and filled with risk if not done correctly. Our team handles the preparation and electronic filing of federal and state tax returns for corporations and LLCs, ensuring accuracy and full compliance. We review your financials in detail, identify tax-saving opportunities, and file all necessary forms before deadlines. You get peace of mind knowing your filings are handled by professionals who understand the nuances of business taxation.'
            ],
            [
                'title' => 'IRS Audit Representation',
                'description' => 'An IRS audit can be stressful and disruptive, but with our seasoned professionals on your side, you don’t have to face it alone. We offer full-service audit representation, helping gather documentation, communicate with auditors, and develop strong, well-documented responses to IRS inquiries. Our proactive approach and understanding of audit procedures ensure that your interests are protected while we work toward the best possible resolution of your case.'
            ],
            [
                'title' => 'Small Business Bookkeeping',
                'description' => 'Accurate bookkeeping is the foundation of a healthy business. We offer meticulous bookkeeping services that include categorizing transactions, bank reconciliations, tracking income and expenses, and generating financial reports that help you make informed decisions. Whether you’re just starting or scaling up, we help maintain clean financial records so you can confidently manage cash flow, prepare for tax season, and grow your business strategically.'
            ],
            [
                'title' => 'Sales Tax Compliance',
                'description' => 'Navigating sales tax laws across different states and municipalities can be overwhelming. Our sales tax compliance services ensure that your business collects, reports, and remits sales tax correctly and on time. We help you determine nexus, register with appropriate agencies, and file returns accurately. With the growing complexity of e-commerce regulations, our team ensures that you remain compliant and avoid costly penalties while continuing to serve your customers seamlessly.'
            ],
            [
                'title' => 'Payroll Tax Management',
                'description' => 'Managing payroll tax obligations is a critical function that, if mishandled, can result in serious fines and liabilities. Our payroll tax services include calculating withholding, filing federal and state payroll tax returns, issuing W-2s and 1099s, and making required deposits. We ensure your employees and contractors are paid accurately and that all required tax documentation is filed on schedule. With us, you can focus on your team while we handle the paperwork.'
            ],
            [
                'title' => 'Startup Tax Advisory',
                'description' => 'Launching a startup is exciting but comes with numerous tax-related decisions. From selecting the ideal legal structure to setting up an efficient accounting system, we help you lay a strong financial foundation. We guide you through estimated taxes, business deductions, and compliance requirements so that you can scale with confidence. Our goal is to ensure that your startup is not only compliant from day one but also set up for maximum tax efficiency and growth.'
            ],
            [
                'title' => 'Quarterly Estimated Tax Planning',
                'description' => 'Many business owners struggle with estimating and paying quarterly taxes, often resulting in underpayment penalties. We eliminate the guesswork by projecting your income, calculating precise quarterly payments, and reminding you of due dates. Our detailed analysis helps you avoid surprises at tax time and keeps your cash flow smooth. With our assistance, you’ll never miss a payment or overpay unnecessarily, ensuring your business stays financially efficient all year.'
            ],
            [
                'title' => 'Real Estate Tax Strategies',
                'description' => "The real estate industry offers numerous tax-saving opportunities, but only if you understand how to use them. We provide expert advice on depreciation, 1031 exchanges, capital gains planning, and property classifications. Whether you're a real estate investor, landlord, or developer, we structure your deals to maximize returns and minimize taxes. Our approach is tailored to your investment goals, helping you grow your portfolio while staying fully compliant with tax laws."
            ],
            [
                'title' => 'Non-Profit Tax Services',
                'description' => 'Running a non-profit organization requires careful attention to tax regulations and filing obligations. We help charitable entities maintain their 501(c)(3) tax-exempt status by filing Form 990, managing financial records, and ensuring compliance with IRS guidelines. Our team also advises on grant tracking, donor acknowledgments, and unrelated business income. With our expertise, your organization can focus on its mission while we ensure your finances remain transparent and compliant.'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
