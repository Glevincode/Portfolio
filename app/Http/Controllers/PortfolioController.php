<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    /* ═══════════════════════════════════════════════════════════
       ALL TRANSLATABLE STRINGS
       Keys: 'en', 'fil', 'ja'
    ═══════════════════════════════════════════════════════════ */
    private function translations(): array
    {
        return [

            /* ── NecTech POS ── */
            'nectech.name' => [
                'en'  => 'NecTech POS System',
                'fil' => 'NecTech POS System',
                'ja'  => 'NecTech POSシステム',
            ],
            'nectech.description' => [
                'en'  => 'A point-of-sale system built for NecTech, handling sales transactions, inventory management, and receipt generation — designed for fast and reliable daily retail operations.',
                'fil' => 'Isang point-of-sale system na ginawa para sa NecTech, na nangangasiwa ng mga transaksyon sa pagbebenta, pamamahala ng imbentaryo, at paglikha ng resibo — dinisenyo para sa mabilis at maaasahang pang-araw-araw na operasyon ng tindahan.',
                'ja'  => 'NecTech向けに構築されたPOSシステムで、販売取引、在庫管理、レシート生成を処理します — 日常の小売業務を迅速かつ確実に行えるよう設計されています。',
            ],
            'nectech.features' => [
                'en'  => [
                    'Sales transaction processing with receipt generation',
                    'Inventory tracking and real-time stock management',
                    'Product catalog with category filtering',
                    'Daily sales reports and revenue dashboard',
                    'User roles and cashier access control',
                    'Order history and transaction logs',
                ],
                'fil' => [
                    'Pagproseso ng transaksyon sa pagbebenta na may paglikha ng resibo',
                    'Pagsubaybay ng imbentaryo at real-time na pamamahala ng stock',
                    'Katalogo ng produkto na may filter sa kategorya',
                    'Pang-araw-araw na ulat sa pagbebenta at revenue dashboard',
                    'Mga papel ng gumagamit at kontrol sa access ng cashier',
                    'Kasaysayan ng order at mga talaan ng transaksyon',
                ],
                'ja'  => [
                    'レシート生成付き販売取引処理',
                    '在庫追跡とリアルタイム在庫管理',
                    'カテゴリフィルタ付き商品カタログ',
                    '日次売上レポートと収益ダッシュボード',
                    'ユーザーロールとレジ担当者アクセス制御',
                    '注文履歴と取引ログ',
                ],
            ],

            /* ── Hours Tracker ── */
            'hours.name' => [
                'en'  => 'Hours Tracker',
                'fil' => 'Hours Tracker',
                'ja'  => '作業時間トラッカー',
            ],
            'hours.description' => [
                'en'  => 'A cross-platform mobile app for logging and tracking daily work hours, tasks, and productivity. Users can attach photos to each time entry, monitor daily progress, and review their weekly history at a glance.',
                'fil' => 'Isang cross-platform mobile app para sa pag-log at pagsubaybay ng pang-araw-araw na oras ng trabaho, mga gawain, at produktibidad. Maaaring mag-attach ang mga gumagamit ng mga larawan sa bawat time entry, subaybayan ang pang-araw-araw na pag-unlad, at suriin ang kanilang lingguhang kasaysayan.',
                'ja'  => '日々の作業時間、タスク、生産性を記録・追跡するクロスプラットフォームモバイルアプリです。各時間エントリに写真を添付し、日次の進捗を監視し、週間履歴を一目で確認できます。',
            ],
            'hours.features' => [
                'en'  => [
                    'Daily time tracker with start/stop timer',
                    'Task management — add, edit, and complete tasks per day',
                    'Photo attachment on each time entry (camera & gallery)',
                    'Daily summary with total hours logged',
                    'Weekly history view with per-day breakdown',
                    'Firebase real-time sync across devices',
                    'Offline support via local state with Expo',
                ],
                'fil' => [
                    'Pang-araw-araw na time tracker na may start/stop timer',
                    'Pamamahala ng gawain — magdagdag, mag-edit, at kumpletuhin ang mga gawain bawat araw',
                    'Pag-attach ng larawan sa bawat time entry (camera at gallery)',
                    'Pang-araw-araw na buod na may kabuuang oras na nai-log',
                    'Lingguhang kasaysayan na may breakdown bawat araw',
                    'Firebase real-time sync sa iba\'t ibang device',
                    'Offline na suporta sa pamamagitan ng lokal na estado gamit ang Expo',
                ],
                'ja'  => [
                    'スタート/ストップタイマー付き日次時間トラッカー',
                    'タスク管理 — 1日ごとのタスクの追加・編集・完了',
                    '各時間エントリへの写真添付（カメラ＆ギャラリー）',
                    '合計記録時間付き日次サマリー',
                    '日別内訳付き週間履歴ビュー',
                    'Firebase によるデバイス間リアルタイム同期',
                    'Expo のローカル状態によるオフラインサポート',
                ],
            ],

            /* ── TaskApp ── */
            'taskapp.name' => [
                'en'  => 'TaskApp',
                'fil' => 'TaskApp',
                'ja'  => 'タスクアプリ',
            ],
            'taskapp.description' => [
                'en'  => 'A simple and intuitive task management app for organizing daily activities and improving productivity. Users can create, edit, and complete tasks with due dates and priority levels.',
                'fil' => 'Isang simple at madaling gamitin na task management app para sa pag-oorganisa ng pang-araw-araw na aktibidad at pagpapabuti ng produktibidad. Maaaring lumikha, mag-edit, at kumpletuhin ang mga gawain na may mga deadline at antas ng priyoridad.',
                'ja'  => '日々の活動を整理し生産性を向上させるための、シンプルで直感的なタスク管理アプリです。期限と優先度を設定してタスクの作成・編集・完了が行えます。',
            ],
            'taskapp.features' => [
                'en'  => [
                    'Create and manage tasks with due dates',
                    'Set priority levels for each task',
                    'Mark tasks as complete',
                    'Filter tasks by status or priority',
                    'Local storage for offline access',
                ],
                'fil' => [
                    'Lumikha at pamahalaan ang mga gawain na may mga deadline',
                    'Itakda ang mga antas ng priyoridad para sa bawat gawain',
                    'Markahan ang mga gawain bilang kumpleto',
                    'I-filter ang mga gawain ayon sa katayuan o priyoridad',
                    'Lokal na storage para sa offline na access',
                ],
                'ja'  => [
                    '期限付きタスクの作成と管理',
                    '各タスクの優先度設定',
                    'タスクを完了としてマーク',
                    'ステータスまたは優先度でタスクをフィルタリング',
                    'オフラインアクセス用のローカルストレージ',
                ],
            ],

            /* ── MeshUp ── */
            'meshup.name' => [
                'en'  => 'MeshUp Movie App',
                'fil' => 'MeshUp Movie App',
                'ja'  => 'MeshUp 映画アプリ',
            ],
            'meshup.description' => [
                'en'  => 'A movie discovery app that allows users to browse and search for movies, view details, and save favorites. The app integrates with a movie database API to provide up-to-date information on popular films.',
                'fil' => 'Isang movie discovery app na nagbibigay-daan sa mga gumagamit na mag-browse at maghanap ng mga pelikula, tingnan ang mga detalye, at i-save ang mga paborito. Nag-iintegrate ang app sa movie database API para magbigay ng napapanahong impormasyon sa mga sikat na pelikula.',
                'ja'  => '映画を閲覧・検索し、詳細を確認してお気に入りに保存できる映画発見アプリです。映画データベースAPIと連携し、人気映画の最新情報を提供します。',
            ],
            'meshup.features' => [
                'en'  => [
                    'Browse and search for movies',
                    'View detailed information about each movie',
                    'Save favorite movies to a personal list',
                    'Responsive design for various screen sizes',
                ],
                'fil' => [
                    'Mag-browse at maghanap ng mga pelikula',
                    'Tingnan ang detalyadong impormasyon tungkol sa bawat pelikula',
                    'I-save ang mga paboritong pelikula sa personal na listahan',
                    'Responsive na disenyo para sa iba\'t ibang laki ng screen',
                ],
                'ja'  => [
                    '映画の閲覧と検索',
                    '各映画の詳細情報の確認',
                    'お気に入り映画を個人リストに保存',
                    'さまざまな画面サイズに対応したレスポンシブデザイン',
                ],
            ],

            /* ── Experience ── */
            'exp.role' => [
                'en'  => 'Web Developer Intern',
                'fil' => 'Web Developer Intern',
                'ja'  => 'Webデベロッパーインターン',
            ],
            'exp.company' => [
                'en'  => 'BizMatch Company — Cebu, Philippines',
                'fil' => 'BizMatch Company — Cebu, Pilipinas',
                'ja'  => 'BizMatch Company — フィリピン・セブ',
            ],
            'exp.description' => [
                'en'  => 'Designed and developed a real-time synchronized monitoring software for PisoNet machines — enabling operators to remotely track machine status, usage sessions, and revenue across multiple units from a single dashboard.',
                'fil' => 'Nagdisenyo at nagtatayo ng real-time synchronized monitoring software para sa PisoNet machines — nagbibigay-kakayahan sa mga operator na malayuang subaybayan ang katayuan ng makina, mga sesyon ng paggamit, at kita mula sa isang dashboard.',
                'ja'  => 'PisoNetマシン向けにリアルタイム同期監視ソフトウェアを設計・開発しました — オペレーターが単一のダッシュボードから複数ユニットのマシン状態、使用セッション、収益をリモートで追跡できるようにしました。',
            ],
        ];
    }

    /* ═══════════════════════════════════════════════════════════
       HELPER — resolve a translation key for the active locale
    ═══════════════════════════════════════════════════════════ */
    private function t(array $translations, string $key, string $lang): mixed
    {
        return $translations[$key][$lang]
            ?? $translations[$key]['en']   // fallback to English
            ?? null;
    }

    /* ═══════════════════════════════════════════════════════════
       INDEX
    ═══════════════════════════════════════════════════════════ */
    public function index(Request $request)
    {
        // Detect language: query-string ?lang=fil  OR  cookie  OR  default 'en'
        $supported = ['en', 'fil', 'ja'];
        $lang = $request->query('lang')
            ?? $request->cookie('portfolio_lang')
            ?? 'en';

        if (!in_array($lang, $supported)) {
            $lang = 'en';
        }

        $tr = $this->translations();

        $projects = [

            // ── WEB ─────────────────────────────────────────────────────
            [
                'name'        => $this->t($tr, 'nectech.name', $lang),
                'type'        => 'web',
                'ongoing'     => true,
                'description' => $this->t($tr, 'nectech.description', $lang),
                'tags'        => ['Laravel', 'PHP', 'MySQL', 'TypeScript'],
                'github'      => '',
                'demo'        => '',
                'featured'    => false,
                'image'       => 'images/nectecimage/nectech8.png',
                'images'      => [
                    'images/nectecimage/nectech8.png',
                    'images/nectecimage/nectech1.png',
                    'images/nectecimage/nectech2.png',
                    'images/nectecimage/nectech3.png',
                    'images/nectecimage/nectech4.png',
                    'images/nectecimage/nectech5.png',
                    'images/nectecimage/nectech6.png',
                    'images/nectecimage/nectech7.png',
                ],
                'features'    => $this->t($tr, 'nectech.features', $lang),
            ],
           
[
    'name'        => 'Installment Tracker System',
    'type'        => 'web',
    'ongoing'     => false,
    'description' => 'A Laravel-based web application designed to streamline installment payment management for small businesses. The system enables efficient customer record management, payment tracking, balance monitoring, and installment history reporting through an intuitive and responsive interface. It helps improve payment monitoring accuracy and reduces manual record-keeping efforts.',
    'tags'        => ['Laravel', 'PHP', 'MySQL', 'TypeScript'],

    'github'      => '',
    'demo'        => '',
    'featured'    => true,
    'image'       => 'images/installmenttracker/install1.png',
    'images'      => [
        'images/installmenttracker/install1.png',
        'images/installmenttracker/install2.png',
    ],
    'features'    => [
        'Customer management and account tracking',
        'Installment payment recording and history',
        'Automatic balance calculation',
        'Payment status monitoring',
        'Customer search and filtering',
        'Dashboard with installment summaries',
        'Responsive design for desktop and mobile devices',
        'Secure authentication and user access control',
    ],
],
            // ── MOBILE ──────────────────────────────────────────────────
            [
                'name'        => $this->t($tr, 'hours.name', $lang),
                'type'        => 'mobile',
                'featured'    => true,
                'ongoing'     => false,
                'image'       => 'images/hours1.png',
                'description' => $this->t($tr, 'hours.description', $lang),
                'features'    => $this->t($tr, 'hours.features', $lang),
                'images'      => [
                    'images/hours1.png',
                    'images/hours2.jpg',
                    'images/hours3.jpg',
                    'images/hours4.jpg',
                    'images/hours5.jpg',
                ],
                'tags'        => ['React Native', 'Expo', 'Firebase', 'TypeScript'],
                'github'      => '',
                'demo'        => '',
            ],
            [
                'name'        => $this->t($tr, 'taskapp.name', $lang),
                'type'        => 'mobile',
                'featured'    => false,
                'ongoing'     => false,
                'image'       => 'images/taskapp/task1.jpg',
                'description' => $this->t($tr, 'taskapp.description', $lang),
                'features'    => $this->t($tr, 'taskapp.features', $lang),
                'images'      => [
                    'images/taskapp/task1.jpg',
                    'images/taskapp/task2.jpg',
                    'images/taskapp/task3.jpg',
                    'images/taskapp/task4.jpg',
                ],
                'tags'        => ['React Native', 'Expo', 'TypeScript'],
                'github'      => '',
                'demo'        => '',
            ],
            [
                'name'        => $this->t($tr, 'meshup.name', $lang),
                'type'        => 'mobile',
                'featured'    => false,
                'ongoing'     => false,
                'image'       => 'images/meshup/meshup1.png',
                'description' => $this->t($tr, 'meshup.description', $lang),
                'features'    => $this->t($tr, 'meshup.features', $lang),
                'images'      => [
                    'images/meshup/meshup1.png',
                    'images/meshup/meshup2.png',
                ],
                'tags'        => ['React Native', 'Expo', 'TypeScript'],
                'github'      => '',
                'demo'        => '',
            ],
        ];

        $experiences = [
            [
                'role'        => $this->t($tr, 'exp.role', $lang),
                'company'     => $this->t($tr, 'exp.company', $lang),
                'period'      => 'Aug – Dec 2024',
                'description' => $this->t($tr, 'exp.description', $lang),
                'tags'        => ['Laravel', 'PHP', 'MySQL', 'WebSockets', 'Real-time Sync', 'Dashboard'],
            ],
        ];

        return view('portfolio', compact('projects', 'experiences', 'lang'));
    }

    /* ═══════════════════════════════════════════════════════════
       CONTACT
    ═══════════════════════════════════════════════════════════ */
public function sendContact(Request $request)
{
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string|max:2000',
    ]);

    $subject = $validated['subject'] ?? 'New Portfolio Contact';

    Mail::send([], [], function ($mail) use ($validated, $subject) {
        $mail->to('glevinbonganciso529@gmail.com')
             ->subject($subject . ' — from ' . $validated['name'])
             ->html(
                 '<p><strong>Name:</strong> '    . e($validated['name'])    . '</p>' .
                 '<p><strong>Email:</strong> '   . e($validated['email'])   . '</p>' .
                 '<p><strong>Subject:</strong> ' . e($subject)              . '</p>' .
                 '<p><strong>Message:</strong><br>' . nl2br(e($validated['message'])) . '</p>'
             );
    });

    // AJAX response
    if ($request->ajax()) {
        return response()->json(['success' => true, 'message' => "Message sent! I'll get back to you soon."]);
    }

    // Fallback for non-JS
    return redirect()->route('portfolio')->with('success', "Message sent! I'll get back to you soon.");
}
}