import AssigningDuties from '@/components/AssigningDuties';
import Layout from '@/components/Layout';
import { CreateDutyProps } from '@/components/types';
import { useState } from 'react';
import 'react-calendar/dist/Calendar.css';
import DatePicker from 'react-date-picker';
import 'react-date-picker/dist/DatePicker.css';

export default function Create({ staff, tasks }: CreateDutyProps) {
    const [date, setDate] = useState<Date>(new Date());

    const formatDate = (date: Date): string => {
        return date.toISOString().split('T')[0];
    };
    const formattedDate = formatDate(date);
    return (
        <Layout>
            <DatePicker onChange={setDate} value={date} />
            <AssigningDuties date={formattedDate} staff={staff} tasks={tasks} />
            {/* {duties && <AssigningDuties initialDuties={duties} />} */}
        </Layout>
    );
}
