export type Duty = {
    id: number;
    staffmember_id: number;
    task_id: number | null;
    dutydate: Date;
    shift_type?: string;
    hours?: number;
};

export type CreateDutyProps = {
    staff?: Staffmember[];
    tasks?: Task[];
    date: Date;
};

interface Staffmember {
    id: number;
    name: string;
    role: string;
}

interface Task {
    id: number;
    name: string;
}
