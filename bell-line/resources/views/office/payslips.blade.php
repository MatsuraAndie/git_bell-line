<x-for_admin-layout>
  <x-slot name="title">給与明細出力 │ ベルライン</x-slot>

  @include('common.header-office', ['title' => '給与明細出力'])
  <section class="max-w-7xl mx-auto bg-white p-10">
    <ul class="grid grid-cols-2 gap-6">
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            日付</div>
          <input type="month" id="date"
            class="w-4/6 rounded-md border-gray-300 p-3 text-lg shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
        </div>
      </li>
      <li>
        <div class="relative z-0 flex">
          <div
            class="flex items-center rounded-md rounded-r-none border-r-0 border-gray-300 bg-gray-100 px-5 py-2 border w-2/6 shadow-sm">
            ドライバー名</div>
          <select name="driver"
            class="w-4/6 rounded-md border-gray-300 p-3 text-lg shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50"></select>
        </div>
      </li>
    </ul>
    <div class="mt-5 flex justify-end">
      <button class="p-2 rounded bg-blue-500 hover:bg-blue-600 text-white border-blue-700 mx-1">検　索</button>
    </div>
  </section>

  <section class="max-w-7xl mx-auto bg-white p-10 mt-5">
    <h2 class="flex items-center mb-5 text-blue-700 font-bold">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-banknote-icon lucide-banknote">
        <rect width="20" height="12" x="2" y="6" rx="2" />
        <circle cx="12" cy="12" r="2" />
        <path d="M6 12h.01M18 12h.01" />
      </svg>
      &ensp;給与情報
    </h2>
    <div class="grid grid-cols-3 gap-6">
      <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 space-y-3">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" colspan="2" class="border-1 p-4 font-medium text-center">勤怠</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center w-2/6">出勤日数</th>
            <td class="p-4 border-1"><input type="number" id="days"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">出勤時間</th>
            <td class="p-4 border-1"><input type="number" id="time"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">欠勤</th>
            <td class="p-4 border-1"><input type="number" id="absenteeism"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">不就労</th>
            <td class="p-4 border-1"><input type="number" id="unemployed"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">平日普通</th>
            <td class="p-4 border-1"><input type="number" id="week-nomal"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">平日早朝</th>
            <td class="p-4 border-1"><input type="number" id="week-morning"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">休日普通</th>
            <td class="p-4 border-1"><input type="number" id="holiday-nomal"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">休日早朝</th>
            <td class="p-4 border-1"><input type="number" id="holiday-morning"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">残業時間</th>
            <td class="p-4 border-1"><input type="number" id="overtime"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">時間外計</th>
            <td class="p-4 border-1"><input type="number" id="overtime-total"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <td colspan="2" class="p-4 border-1"></td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center h-6">有給／残日数</th>
            <td class="p-4 border-1 flex items-center"><input type="number" id="overtime-total"
                class="w-1/2 rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
              <p class="p-3">／</p>
              <input type="number" id="overtime-total"
                class="w-1/2 rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
        </tbody>
      </table>
      <table class="w-full border-collapse bg-white text-left text-sm space-y-3">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" colspan="2" class="border-1 p-4 font-medium text-center">支給額</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center w-2/6">基本給</th>
            <td class="p-4 border-1"><input type="number" id="salary"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">無事故手当</th>
            <td class="p-4 border-1"><input type="number" id="no-accidents"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">特別手当</th>
            <td class="p-4 border-1"><input type="number" id="special"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">出張費</th>
            <td class="p-4 border-1"><input type="number" id="trip"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">調整費</th>
            <td class="p-4 border-1"><input type="number" id="adjustment"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">皆勤手当</th>
            <td class="p-4 border-1"><input type="number" id="perfect"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <td colspan="2" class="p-4 border"></td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">有給</th>
            <td class="p-4 border-1"><input type="number" id="paid"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">深夜残業</th>
            <td class="p-4 border-1"><input type="number" id="night-overtime"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">時間外手当</th>
            <td class="p-4 border-1"><input type="number" id="outside"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">通勤手当</th>
            <td class="p-4 border-1"><input type="number" id="commute"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">不就労控除</th>
            <td class="p-4 border-1"><input type="number" id="absenteeism-deduction"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-3 p-4  font-medium bg-gray-50 text-center">総支給額</th>
            <td class="p-4 border-3"><input type="number" id="amount-paid"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
        </tbody>
      </table>
      <table class="w-full border-collapse bg-white text-left text-sm space-y-3">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" colspan="2" class="border-1 p-4 font-medium text-center">控除額</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
          <tr>
            <th class="border-l-1 border-r-1 p-4  font-medium bg-gray-50 text-center">健康保険</th>
            <td class="p-4 border-1"><input type="number" id="health"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-l-1  font-medium bg-gray-50 text-right">（基本）</th>
            <td class="p-4 border-1"><input type="number" id="health-basic"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-l-1  font-medium bg-gray-50 text-right">（特定）</th>
            <td class="p-4 border-1"><input type="number" id="health-identification"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">介護保険</th>
            <td class="p-4 border-1"><input type="number" id="nursing-care"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">厚生年金</th>
            <td class="p-4 border-1"><input type="number" id="welfare-pension"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">年金基金</th>
            <td class="p-4 border-1"><input type="number" id="pension-fund"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">雇用保険</th>
            <td class="p-4 border-1"><input type="number" id="employment-insurance"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">所得税</th>
            <td class="p-4 border-1"><input type="number" id="income-tax"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">貸付金</th>
            <td class="p-4 border-1"><input type="number" id="loan"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">立替金</th>
            <td class="p-4 border-1"><input type="number" id="advance-payment"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">任意保険</th>
            <td class="p-4 border-1"><input type="number" id="voluntary-insurance"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">社保調整</th>
            <td class="p-4 border-1"><input type="number" id="socialinsurance-adjustment"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">債権差押</th>
            <td class="p-4 border-1"><input type="number" id="foreclosure"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">振込手数料</th>
            <td class="p-4 border-1"><input type="number" id="transfer"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-3 p-4  font-medium bg-gray-50 text-center">控除計</th>
            <td class="p-4 border-3"><input type="number" id="deduction-total"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">年末調整</th>
            <td class="p-4 border-1"><input type="number" id="year-adjustment"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
          <tr>
            <th class="border-1 p-4  font-medium bg-gray-50 text-center">調整額</th>
            <td class="p-4 border-1"><input type="number" id="adjustment-amount"
                class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <section class="max-w-7xl mx-auto bg-white p-10">
    <table class="w-4/6 border-collapse bg-white text-left text-sm">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" colspan="2" class="border-1 p-4 font-medium text-center">差引支給額内訳</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        <tr>
          <th class="border-1 p-4  font-medium bg-gray-50 text-center">差引支給額</th>
          <td class="p-4 border-1"><input type="number" id="deduction"
              class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
          </td>
        </tr>
        <tr>
          <th class="border-1 font-medium bg-gray-50 text-center">銀行振込１</th>
          <td class="p-4 border-1"><input type="number" id="bank1"
              class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
          </td>
        </tr>
        <tr>
          <th class="border-1 font-medium bg-gray-50 text-center">銀行振込２</th>
          <td class="p-4 border-1"><input type="number" id="bank2"
              class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
          </td>
        </tr>
        <tr>
          <th class="border-1 font-medium bg-gray-50 text-center">現金</th>
          <td class="p-4 border-1"><input type="number" id="cash"
              class="w-full rounded-md border-gray-300 p-3 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
          </td>
        </tr>
      </tbody>
    </table>
    <ul class="mt-5 flex justify-end">
      <li>
        <button class="p-2 rounded bg-green-500 hover:bg-green-600 text-white border-green-700 mx-1">登録／更新</button>
      </li>
      <li>
        <button class="p-2 rounded bg-violet-500 hover:bg-violet-600 text-white border-violet-700 mx-1">出　力</button>
      </li>
    </ul>
  </section>
  <div class="text-center mt-10">
    <a href="{{ route('office.menu') }}"><button
        class="p-2 rounded bg-gray-500 hover:bg-gray-600 text-white border-gray-700 mx-1">TOPに戻る</button></a>
  </div>
</x-for_admin-layout>
