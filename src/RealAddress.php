<?php
namespace Faker\Provider;

class RealAddress extends Base
{
    private $fieldOrder = ['street', 'city', 'state', 'zip'];

    private $data = [
        ['600 Dexter Ave', 'Montgomery', 'AL', '36103'],
        ['120 East 4th St', 'Juneau', 'AK', '99811'],
        ['1700 W. Washington', 'Phoenix', 'AZ', '85007'],
        ['500 Woodlane St', 'Little Rock', 'AR', '72201'],
        ['1315 10th St', 'Sacramento', 'CA', '95814'],
        ['136 State Capitol', 'Denver', 'CO', '80203'],
        ['210 Capitol Ave.', 'Hartford', 'CT', '06106'],
        ['820 N. French St.', 'Wilmington', 'DE', '19801'],
        ['400 S Monroe St', 'Tallahassee', 'FL', '32399'],
        ['400 S Monroe St', 'Atlanta', 'GA', '30334'],
        ['415 S Beretania St', 'Honolulu', 'HI', '96813'],
        ['700 W. Jefferson', 'Boise', 'ID', '83720'],
        ['207 State House', 'Springfield', 'IL', '62706'],
        ['200 W Washington St', 'Indianapolis', 'IN', '46204'],
        ['1007 E Grand Ave', 'Des Moines', 'IA', '50319'],
        ['300 SW 10th St', 'Topeka', 'KS', '6612'],
        ['700 Capitol Ave.', 'Frankfurt', 'KY', '40601'],
        ['PO Box 94004', 'Baton Rouge', 'LA', '70804'],
        ['230 State St', 'Augusta', 'ME', '04330'],
        ['100 State Cir', 'Anapolis', 'MD', '21401'],
        ['Office of the Governor', 'Boston', 'MA', '02133'],
        ['PO Box 30013', 'Lansing', 'MI', '48909'],
        ['75 Constitution Ave.', 'St. Paul', 'MN', '55155'],
        ['PO Box 139', 'Jackson', 'MS', '39205'],
        ['PO Box 720', 'Jefferson City', 'MO', '65102'],
        ['1301 East Sixth Ave.', 'Helena', 'MT', '59620'],
        ['PO Box 94848', 'Lincoln', 'NE', '68509'],
        ['101 N. Carson Street', 'Carson City', 'NV', '89701'],
        ['25 Capitol St', 'Concord', 'NH', '03301'],
        ['PO Box 004', 'Trenton', 'NJ', '08625'],
        ['411 S Capitol St', 'Santa Fe', 'NM', '87503'],
        ['161 State St', 'Albany', 'NY', '12224'],
        ['116 West Jones St.', 'Raleigh', 'NC', '27603'],
        ['600 E. Boulevard Avenue', 'Bismark', 'ND', '58505'],
        ['77 South High St', 'Columbus', 'OH', '43215'],
        ['2300 N Lincoln Blvd', 'Oklahoma City', 'OK', '73105'],
        ['900 Court St', 'Salem', 'OR', '97310'],
        ['225 Main Capitol', 'Harrisburg', 'PA', '17120'],
        ['222 State House', 'Providence', 'RI', '02903'],
        ['PO Box 11829', 'Columbia', 'SC', '29211'],
        ['500 East Capitol', 'Pierre', 'SD', '57501'],
        ['600 Charlotte Ave', 'Nashville', 'TN', '37243'],
        ['PO Box 12428', 'Austin', 'TX', '78711'],
        ['210 State Capitol', 'Salt Lake City', 'UT', '84114'],
        ['109 State St.', 'Montpelier', 'VT', '05609'],
        ['1000 Bank St', 'Richmond', 'VA', '23219'],
        ['PO Box 40002', 'Olympia', 'WA', '98504'],
        ['398 Greenbrier St', 'Charleston', 'WV', '25305'],
        ['PO Box 7863', 'Madison', 'WI', '53707'],
        ['200 West 24th Street', 'Cheyenne', 'WY', '82002'],
    ];


    public function realAddress() {
        $rand = $this->randomElement($this->data);
        return array_combine($this->fieldOrder, $rand);
    }

    public function realStreet() {
        return $this->_getRandField(0);
    }

    public function realCity() {
        return $this->_getRandField(1);
    }

    public function realState() {
        return $this->_getRandField(2);
    }

    public function realZip() {
        return $this->_getRandField(3);
    }

    private function _getRandField($number = 0) {
        $rand = $this->randomElement($this->data);
        return $rand[$number];
    }
}
